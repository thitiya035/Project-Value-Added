<?php
session_start();
if (empty($_SESSION['id_user'])) {
    header('Location:../login.php');
    // }else if (!empty($_SESSION['id_user'])) {
    //     header('Location:profile.php');
} else if ($_SESSION['permission'] == "user") {
    header('Location:../profile.php');
}
$header = "Member | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/member_modal.php";
include "./src/views/member_add_modal.php";
include "./src/views/member_edit_modal.php";
include "./src/component/footage.php";
