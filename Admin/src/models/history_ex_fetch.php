<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Project-Value-Added/Mysql/Connect.php";
include($path);

date_default_timezone_set('Asia/Bangkok');
$day_local = date("d/m/Y");

$q_fetch = "SELECT * FROM `log_exchange_point` WHERE `date_exchange_point`LIKE '$day_local'";
$result_his = mysqli_query($dbcon, $q_fetch);
$result_his_ex = mysqli_query($dbcon, $q_fetch);
