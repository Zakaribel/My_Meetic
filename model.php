<?php


class Model
{

    private $user_db = 'root';
    private $pass = '';
    private $db_name = 'zakidb';
    private $dbh = null;



    function __construct()
    {
        try {

            $this->dbh = new PDO("mysql:host=localhost;dbname=$this->db_name", $this->user_db, $this->pass);
        } catch (PDOException $e) {
            print 'ERREUR ! : ' . $e->getMessage() . "<br/>";
            die();
        }
    }


    function register($nom, $prenom, $birthday, $password, $ville, $email, $genre, $loisirs)
    {
        $sql = $this->dbh->prepare('INSERT INTO users (nom,prenom,date_naissance,genre,ville,email,pass,loisir) VALUES (?,?,?,?,?,?,?,?)');
        return $sql->execute(array($nom, $prenom, $birthday, $genre, $ville, $email, $password, $loisirs));
    }


    function login($email)
    {
        $sql = $this->dbh->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute(array($email));
        return  $sql->fetchAll();
    }

    function modifyMemberInfo($nom, $prenom, $birthday, $loisirs, $genre, $status, $email_to_be_modified, $id)
    {
        $sql = $this->dbh->prepare("UPDATE users SET nom = ?, prenom = ?, date_naissance = ?, genre = ?, email = ?, loisir = ?, status = ? WHERE id = ?");
        $sql->execute(array($nom, $prenom, $birthday, $genre, $email_to_be_modified, $loisirs, $status, $id));
    }




    function searchMembers($values)
    {
        $query = "SELECT prenom, ville, loisir, TIMESTAMPDIFF(YEAR,date_naissance, CURRENT_DATE) AS 'age' FROM users ";

        foreach ($values as $key => $value) {
            if ($key == 0) {
                $query .= "WHERE ";
            } else {
                $query .= " OR ";
            }
            $query .= " (prenom LIKE '%$value%'";
            $query .= " OR ville like  '%$value%'";
            $query .= " OR TIMESTAMPDIFF(YEAR,date_naissance, CURRENT_DATE) like  '%$value%'";
            $query .= " OR loisir like  '%$value%')";
            if ($_GET['tranche'] == "45+") {
                $query .= " AND TIMESTAMPDIFF(YEAR,date_naissance, CURRENT_DATE) > 45";
            } elseif ($_GET['tranche'] == "25/35 ans") {
                $query .= " AND TIMESTAMPDIFF(YEAR,date_naissance, CURRENT_DATE) BETWEEN 25 AND 35";
            } elseif ($_GET['tranche'] == "18/25 ans") {
                $query .= " AND TIMESTAMPDIFF(YEAR,date_naissance, CURRENT_DATE) BETWEEN 18 AND 25";
            } elseif ($_GET['tranche'] == "35/45 ans") {
                $query .= " AND TIMESTAMPDIFF(YEAR,date_naissance, CURRENT_DATE) BETWEEN 35 AND 45";
            }
        }
        $query = $this->dbh->prepare($query);
        $query->execute();
        return $query->fetchAll();
    }
}
