<?php 
require "../Mysql/Connect.php";
// require '../../mysql/connect.php';

// # ToDay
$date = date("Y-m-d");
// $date = "2021-08-09";
// echo $date . '<br>';
 
$q_fetch_topToDay = "SELECT id_user,SUM(point_product) FROM log_exchange_point WHERE date_exchange_point = '$date' GROUP BY id_user ORDER By SUM(point_product) DESC LIMIT 5";
$result_fetch_topToDay = mysqli_query($dbcon,$q_fetch_topToDay);

// while ($lists_user = mysqli_fetch_assoc($result_fetch_topToDay)){
//     echo $lists_user['id_user'] . '=>' . $lists_user['SUM(point_product)'] . '<br>' ;
// }