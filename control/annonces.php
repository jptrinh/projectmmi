<?php 
session_start();
if(isset($_SESSION['email'])) {

    include_once('../view/annonces.php');
} else {
    header('Location: ../view/index.php');
}

?>