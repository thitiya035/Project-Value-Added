<?php
session_start();
if (empty($_SESSION['id_user'])) {
    header('Location:../login.php');
    // }else if (!empty($_SESSION['id_user'])) {
    //     header('Location:profile.php');
} else if ($_SESSION['permission'] == "user") {
    header('Location:../profile.php');
}
$header = "Type Of Product | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/product_type_modal.php";
include "./src/views/product_type_edit_point.php";
include "./src/component/footage.php";
