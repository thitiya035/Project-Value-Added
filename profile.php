<?php 
session_start();
if(empty($_SESSION['id_user'])){
    header('Location:login.php');
}
$header = "Profile | User";
include './User./component/header.php';
include './User/views/profileUser_modal.php';
include './User/component/footage.php';
?>
