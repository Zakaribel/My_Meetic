<?php

class Controller
{
    private $model;

    function  __construct()
    {
        $this->model = new Model();
    }

    function goToPage($page)
    {
        $functionName = "goToPage_$page";
        $this->$functionName();
    }

    function  goToPage_inscription()
    {
        if (isset($_POST['submit'])) {
            if (
                $_POST['nom'] != ""
                and $_POST['prenom'] != ""
                and $_POST['password'] != ""
                and $_POST['email'] != ""
                and $_POST['ville'] != ""
                and $_POST['birthday'] != ""
                and $_POST['genre'] != ""
                and $_POST['loisirs'] != ""
            ) {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $password = sha1($_POST['password']);
                $email = $_POST['email'];
                $ville = $_POST['ville'];
                $birthday = $_POST['birthday'];
                $genre = $_POST['genre'];
                $loisirs = $_POST['loisirs'];


                if (!empty($birthday) && date('Y') - intval(substr($birthday, 0, 4)) < 18) {
                    echo "<h3 style='color:red;'>Vous devez au minimum avoir 18 ans pour vous inscrire ! <a href='index.php?page=index'>Retour à l'accueil<a></h3>";
                } elseif ($this->model->register($nom, $prenom, $birthday, $password, $ville, $email, $genre, $loisirs)) {
                    echo "Vous êtes bien inscrit !";
                } else {
                    echo "Erreur : vous n'avez pas pu vous inscrire !";
                }
            }
        }

        require './views/view_inscription.php';
    }


    function goToPage_index()
    {

        if (isset($_GET['logout'])) {

            session_destroy();
            header('location:index.php?page=index');
        }
        require './views/view_index.php';
    }

    function goToPage_login()
    {
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $res = $this->model->login($email);


            if ($res) { // email existe dans la ddb
                if ($email == $res[0]['email'] && $password == $res[0]['pass']) { // email & mot de passes corrects
                    if ($res[0]['status'] == 0) { // verification si le compte est supprimé ou non
                        session_destroy();
                        unset($_SESSION);
                        echo "<p style ='color:yellow;'>Désolé, ce compte a définitivement été supprimé.</p>";
                    } else { // le compte n'est pas supprimé 
                        $_SESSION['user_info'] = $res;
                        header('location:index.php?page=index');
                    }
                } else {
                    echo "Identifiants incorrects";
                }
            } else {
                echo "Vous n'êtes pas encore inscrit...";
            }
        }

        require './views/view_login.php';
    }

    function goToPage_members()
    {

        if (isset($_POST['submit'])) {


            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email_to_be_modified = $_POST['email'];
            $birthday = $_POST['birthday'];
            $genre = $_POST['genre'];
            $loisirs = $_POST['loisirs'];
            $status = $_POST['delete'];
            $id = $_GET['id'];


            $this->model->modifyMemberInfo($nom, $prenom, $birthday, $loisirs, $genre, intval($status), $email_to_be_modified, $id);
            session_destroy();
            unset($_SESSION);
            header('location:index.php?page=index&updateSuccess=1');
        }

        require './views/view_members.php';
    }

    function goToPage_search()
    {


        if (isset($_GET['search'])) {

            $tags = explode(" ", $_GET['search']);

            $res = $this->model->searchMembers($tags);
        }

        require './views/view_search.php';
    }
}
