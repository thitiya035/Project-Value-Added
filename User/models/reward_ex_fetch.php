<?php
require './Mysql/Connect.php';
// require '../../Mysql/Connect.php';


$db_fetch_ex = "SELECT * FROM log_exchange_reward";
$result_fetch_ex = mysqli_query($dbcon, $db_fetch_ex);

// $id_user = $_SESSION['id_user'];
// $id_user = 1;
// echo $user['firstname_user'] ." " .$user['lastname_user'];

