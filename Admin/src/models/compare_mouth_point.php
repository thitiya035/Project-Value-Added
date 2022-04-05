<?php
require "../Mysql/Connect.php";
// require '../../mysql/connect.php';

# ToMouth
// $mouth = date("Y-m") . '-%%';
date_default_timezone_set('Asia/Bangkok');
$mouth = date('%%/' . ("m/Y"));
// $mouth = '2022/03/%%';
// $mouth = '%%/03/2022';
// echo $mouth. '<br>';

$q_fetch_topToMouth = "SELECT id_user, SUM(point_product) FROM log_exchange_point WHERE date_exchange_point LIKE '$mouth' GROUP BY id_user ORDER BY SUM(point_product) DESC Limit 10";
$result_fetch_topToMouth = mysqli_query($dbcon, $q_fetch_topToMouth);

$q_fetch_topToMouth_ex = "SELECT id_user, SUM(point_product) FROM log_exchange_point WHERE date_exchange_point LIKE '$mouth' GROUP BY id_user ORDER BY SUM(point_product) DESC Limit 10";
$result_fetch_topToMouth_ex = mysqli_query($dbcon, $q_fetch_topToMouth_ex);

// while ($lists_user_mouth = mysqli_fetch_assoc($result_fetch_topToMouth)){
    // echo $lists_user_mouth['id_user'] . '=>' . $lists_user_mouth['SUM(point_product)'] . '<br>' ;
// }
