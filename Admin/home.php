<?php
if(!empty($_SESSION['id_user'])){
    header('Location:profile.php');
}
$header = "Home | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/home_modal.php";
include "./src/component/footage.php";
