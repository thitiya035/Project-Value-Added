<?php
session_start();
if (empty($_SESSION['id_user'])) {
    header('Location:../login.php');
    // }else if (!empty($_SESSION['id_user'])) {
    //     header('Location:profile.php');
} else if ($_SESSION['permission'] == "user") {
    header('Location:../profile.php');
}

$header = "Home | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/home_modal.php";
include "./src/component/footage.php";
