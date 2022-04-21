<?php
// include "../Mysql/Connect.php";
// include "/Project-Value-Added/Mysql/Connect.php";
// $session_start;

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Project-Value-Added/Mysql/Connect.php";
include($path);

date_default_timezone_set('Asia/Bangkok');
$year_local = date("Y");

$q_fetch = "SELECT * FROM stock";
$result_detail = mysqli_query($dbcon, $q_fetch);

while ($obj = mysqli_fetch_object($result_detail)) {
   $numbers[] =  $obj->number;
}

$q = "SELECT `value` FROM `line` ";
$result_search = mysqli_query($dbcon, $q);

$q_year = "SELECT DISTINCT RIGHT(`date_exchange_point`,4) As `year` FROM `log_exchange_point`;";
$result_year = mysqli_query($dbcon, $q_year);

$q_type = "SELECT name_eng_type_product,name_th_type_product FROM `type_product`;";
$result_type = mysqli_query($dbcon, $q_type);

// $q_count_mouth_of_year_clear = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/%%/$year_local'";
// $result_count_mouth_of_year_clear = mysqli_query($dbcon, $q_count_mouth_of_year_clear);
// $total_clear = mysqli_fetch_assoc($result_count_mouth_of_year_clear);

// $q_count_mouth_of_year_can = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE '%%/%%/$year_local'";
// $result_count_mouth_of_year_can = mysqli_query($dbcon, $q_count_mouth_of_year_can);
// $total_can = mysqli_fetch_assoc($result_count_mouth_of_year_can);

// $q_count_mouth_of_year_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'opaque' AND `date_exchange_point` LIKE '%%/%%/$year_local'";
// $result_count_mouth_of_year_opaque = mysqli_query($dbcon, $q_count_mouth_of_year_opaque);
// $total_opaque = mysqli_fetch_assoc($result_count_mouth_of_year_opaque);
$total_year_clear = search_year('clear', $year_local);
$total_year_can = search_year('can', $year_local);
$total_year_opaque = search_year('opaque', $year_local);

for ($mouth = 1; $mouth < 13; $mouth++) {
   // $time = '%%/' . $mouth_num . '/' . $year_local;
   if ($mouth <= 9) {
      $mouth_num = '0' . $mouth;
   } else {
      $mouth_num = $mouth;
   }
   // echo $mouth_num;
   // $time = '%%/' . $mouth_num . '/' . $year_local . '<br>';
   // echo $time;
   // $time = '%%/03/' . $year_local;
   $q_count_mouth_can = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE '%%/$mouth_num/$year_local'";
   $result_count_mouth_can = mysqli_query($dbcon, $q_count_mouth_can);
   $temp = mysqli_fetch_assoc($result_count_mouth_can);
   $mouth_can[$mouth] = $temp['count'];

   $q_count_mouth_clear = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/$mouth_num/$year_local'";
   $result_count_mouth_clear = mysqli_query($dbcon, $q_count_mouth_clear);
   $temp = mysqli_fetch_assoc($result_count_mouth_clear);
   $mouth_clear[$mouth] = $temp['count'];

   $q_count_mouth_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'opaque' AND `date_exchange_point` LIKE '%%/$mouth_num/$year_local'";
   $result_count_mouth_opaque = mysqli_query($dbcon, $q_count_mouth_opaque);
   $temp = mysqli_fetch_assoc($result_count_mouth_opaque);
   $mouth_opaque[$mouth] = $temp['count'];
}



function search_year($type_search, $year_search1)
{
   $q_count_mouth_of_year_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = '$type_search' AND `date_exchange_point` LIKE '%%/%%/$year_search1'";
   $result_count_mouth_of_year_opaque = mysqli_query($GLOBALS['dbcon'], $q_count_mouth_of_year_opaque);
   $result = mysqli_fetch_assoc($result_count_mouth_of_year_opaque);
   return $result['count'];
}

   // $temp = mysqli_fetch_assoc($result_count_mouth_can);
   // if ($result_count_mouth_can ) {
   // $temp = mysqli_fetch_assoc($result_count_mouth_can);
   // $mouth_can[$mouth] =  $temp['count'];
   // $temp = mysqli_fetch_assoc($result_count_mouth_can);
   // $mouth_can[$mouth] =  $temp['count'];
   // } else {

   // $mouth_can[$mouth] = 0;

   // $mouth_can[$mouth] = 0;
   // }

   // SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/03/2022'


   // $q_count_mouth_can = "SELECT COUNT(type_product) as `count`  FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE ''%%/'$mouth_num'/'$year_local'";
   // $result_count_mouth_can = mysqli_query($dbcon, $q_count_mouth_can);

   //    if (isset($result_count_mouth_can)) {
   //       $mouth_can[$mouth] = 0;
   //    $temp = mysqli_fetch_assoc($result_count_mouth_can);
   //    $mouth_can[$mouth] = $temp['count'];
   //    } else {
   //     $temp = mysqli_fetch_assoc($result_count_mouth_can);
   //     $mouth_can[$mouth] = $temp['count'];
   //    $mouth_can[$mouth] = 0;
   //    }
