<?php
session_start();
if (empty($_SESSION['id_user'])) {
    header('Location:login.php');
} else {
    if ($_SESSION['permission'] == "admin") {
        header('Location:./Admin/home.php');
    }
}

$header = "Reward | User";
include './User/component/header.php';
include './User/views/reward_modal.php';
include './User/component/footage.php';
