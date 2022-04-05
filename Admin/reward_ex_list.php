<?php
session_start();
if (empty($_SESSION['id_user'])) {
    header('Location:../login.php');
    // }else if (!empty($_SESSION['id_user'])) {
    //     header('Location:profile.php');
} else if ($_SESSION['permission'] == "user") {
    header('Location:../profile.php');
}
$header = "Reward Item | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/reward_ex_list_model.php";
include "./src/views/reward_history_ex_modal.php";
include "./src/views/reward_ex_input_track.php";
include "./src/views/reward_edit_track.php";
include "./src/component/footage.php";
