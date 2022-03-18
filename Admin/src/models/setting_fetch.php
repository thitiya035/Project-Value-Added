<?php
require "./../Mysql/Connect.php";

$q_fetch_token = "SELECT * FROM `component` WHERE 1";
$result_fetch_token = mysqli_query($dbcon, $q_fetch_token);
$component = mysqli_fetch_object($result_fetch_token);

mysqli_close($dbcon);
