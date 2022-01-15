<?php
require "../Mysql/Connect.php";
// require '../../mysql/connect.php';
$q_fetch_toppoint = "SELECT name_user,total_point_user FROM user ORDER BY total_point_user DESC Limit 10";
$result_fetch_toppoint = mysqli_query($dbcon, $q_fetch_toppoint);

// while ($lists_user_mouth = mysqli_fetch_assoc($result_fetch_toppoint)){
//     echo $lists_user_mouth['name_user'] . '=>' . $lists_user_mouth['total_point_user'] . '<br>' ;
// }
