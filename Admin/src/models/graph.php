<?php
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "/Project-Value-Added/Mysql/Connect.php";
// include($path);

// $year = $_POST['select_year'];
// $year1 = $year;
// $total_year_clear1 = search_year1('clear', $year);
// $total_year_can1 = search_year1('can', $year);
// $total_year_opaque1 = search_year1('opaque', $year);

// for ($mouth = 1; $mouth < 13; $mouth++) {
//     // $time = '%%/' . $mouth_num . '/' . $year_local;
//     if ($mouth <= 9) {
//         $mouth_num = '0' . $mouth;
//     } else {
//         $mouth_num = $mouth;
//     }
//     // echo $mouth_num;
//     // $time = '%%/' . $mouth_num . '/' . $year_local . '<br>';
//     // echo $time;
//     // $time = '%%/03/' . $year_local;
//     $q_count_mouth_can = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'can' AND `date_exchange_point` LIKE '%%/$mouth_num/$year'";
//     $result_count_mouth_can = mysqli_query($dbcon, $q_count_mouth_can);
//     $temp = mysqli_fetch_assoc($result_count_mouth_can);
//     $mouth_can1[$mouth] = $temp['count'];

//     $q_count_mouth_clear = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'clear' AND `date_exchange_point` LIKE '%%/$mouth_num/$year'";
//     $result_count_mouth_clear = mysqli_query($dbcon, $q_count_mouth_clear);
//     $temp = mysqli_fetch_assoc($result_count_mouth_clear);
//     $mouth_clear1[$mouth] = $temp['count'];

//     $q_count_mouth_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = 'opaque' AND `date_exchange_point` LIKE '%%/$mouth_num/$year'";
//     $result_count_mouth_opaque = mysqli_query($dbcon, $q_count_mouth_opaque);
//     $temp = mysqli_fetch_assoc($result_count_mouth_opaque);
//     $mouth_opaque1[$mouth] = $temp['count'];
// }



// function search_year1($type_search, $year_se)
// {
//     $q_count_mouth_of_year_opaque = "SELECT COUNT(type_product) as `count` FROM `log_exchange_point` WHERE `type_product` = '$type_search' AND `date_exchange_point` LIKE '%%/%%/$year_se'";
//     $result_count_mouth_of_year_opaque = mysqli_query($GLOBALS['dbcon'], $q_count_mouth_of_year_opaque);
//     $result = mysqli_fetch_assoc($result_count_mouth_of_year_opaque);
//     return $result['count'];
// }

// $remine = [
//     "status" => "success",
//     "total_year_clear1" => "total_year_clear1"
// ];

// echo json_encode($remine);
// mysqli_close($dbcon);
