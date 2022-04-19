<?php
require './Mysql/Connect.php';

$q_fetch_toppoint = "SELECT firstname_user,lastname_user,total_point_user FROM user ORDER BY total_point_user DESC Limit 10";
$result_fetch_toppoint = mysqli_query($dbcon, $q_fetch_toppoint);
