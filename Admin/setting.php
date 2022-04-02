<?php
if (!empty($_SESSION['id_user'])) {
    header('Location:profile.php');
}
$header = "Line Notify | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/setting_modal.php";
include "./src/component/footage.php";
