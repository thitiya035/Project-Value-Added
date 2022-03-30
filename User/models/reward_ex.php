<?php
require './Mysql/Connect.php';

$id_reward = $_POST['id_reward'];
$id_user = $_SESSION['id_user'];


$db_reward = "SELECT * from reward where id_reward = '$id_reward' ";
$result_db_reward = mysqli_query($dbcon, $db_reward);
$detail_reward = mysqli_fetch_assoc($result_db_reward);

$db_user = "SELECT * from user where id_user = '$id_user' ";
$result_db_user = mysqli_query($dbcon, $db_user);
$detail_user = mysqli_fetch_assoc($result_db_user);

