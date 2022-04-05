<?php
session_start();
if (!empty($_SESSION['id_user'])) {
    if ($_SESSION['permission'] == "admin") {
        header('Location:./Admin/home.php');
    } else {
        header('Location:profile.php');
    }
}
$header = "เครื่องเพิ่มมูลค่าขวดน้ำพลาสติกและกระป๋องอะลูมิเนียม";
include './User/component/header.php';
include './User/views/login_modal.php';
include './User/component/footage.php';
