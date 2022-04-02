<?php
if (!empty($_SESSION['id_user'])) {
    header('Location:profile.php');
}
$header = "Reward Item | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/reward_modal.php";
include './src/views/reward_add_modal.php';
include "./src/views/reward_edit_modal.php";
include "./src/component/footage.php";
