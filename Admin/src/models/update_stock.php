<?php
require "../Mysql/Connect.php";

$q_fetch = "SELECT * FROM stock";
$result_detail = mysqli_query($dbcon, $q_fetch);
$i = 0;

while ($obj = mysqli_fetch_object($result_detail)) {
   $numbers[] =  $obj->number;
}

// $q = "SELECT `value` FROM `line` ";
// $result_search = mysqli_query($dbcon, $q);

$q_year = "SELECT DISTINCT RIGHT(`date_exchange_point`,4) As `year` FROM `log_exchange_point`;";
$result_year = mysqli_query($dbcon, $q_year);

$q_type = "SELECT name_eng_type_product, `name_th_type_product` FROM `type_product`;";
$result_type = mysqli_query($dbcon, $q_type);

date_default_timezone_set('Asia/Bangkok');
$year = date("Y");
echo $year;

// statistics (clear)
for ($q = 1; $q <= 12; $q++) {
   if ($q <= 9) {
      $mouth = '0' . $q;
   } else {
      $mouth = $q;
   }
   $q_count_mouth_clear = "SELECT COUNT(name_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/$mouth/$year'";
   $result_count_mouth_clear = mysqli_query($dbcon, $q_count_mouth_clear);
   if ($result_count_mouth_clear == '0') {
      $mouth_clear[$q] = 0;
   } else {
      $re_mouth_clear = mysqli_fetch_assoc($result_count_mouth_clear);
      $mouth_clear[$q] = $re_mouth_clear['count'];
   }
   // echo $mouth_clear[$q];
}
// while ($year = mysqli_fetch_assoc($result_year)) {
//    for ($mouth = 01; $mouth < 13, $mouth++;) {
//       // can 
//       $q_count_mouth_can = "SELECT * FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE `'%%/'.$mouth.'/'.$year`";
//       $result_count_mouth_can = mysqli_query($dbcon, $q_count_mouth_can);
//       // $mouth_can[$mouth] = $mysqli_fetch_assoc;
//    }
// }
// 
// SELECT COUNT(name_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/03/2022'


// SELECT * FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE '%%/03/2022';

# INSERT new data
// INSERT INTO `log_exchange_point`(`id_user`, `group_step`, `id_product`, `name_product`, `type_product`, `point_product`, `date_exchange_point`, `time_exchange_point`) 
//VALUES ('1','barcode','4','Sing','can','50','11/03/2021','17:37:00')  
// **sensor**
//VALUES ('1','Unknow','4','Unknow','clear','50','11/03/2021','17:37:00')