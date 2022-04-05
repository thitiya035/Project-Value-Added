<?php
require "../Mysql/Connect.php";
// require '../../mysql/connect.php';

// # ToDay
date_default_timezone_set('Asia/Bangkok');
$date = date("d/m/Y");


// $date = "23/03/2022";
// echo $date . '<br>';

$q_fetch_topToDay = "SELECT id_user,SUM(point_product) FROM log_exchange_point WHERE date_exchange_point = '$date' GROUP BY id_user ORDER By SUM(point_product) DESC LIMIT 5";
$result_fetch_topToDay = mysqli_query($dbcon, $q_fetch_topToDay);

$q_fetch_topToDay_ex = "SELECT id_user,SUM(point_product) FROM log_exchange_point WHERE date_exchange_point = '$date' GROUP BY id_user ORDER By SUM(point_product) DESC LIMIT 5";
$result_fetch_topToDay_ex = mysqli_query($dbcon, $q_fetch_topToDay_ex);

// while ($lists_user = mysqli_fetch_assoc($result_fetch_topToDay)){
//     echo $lists_user['id_user'] . '=>' . $lists_user['SUM(point_product)'] . '<br>' ;
// }