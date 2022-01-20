<?php
require "../Mysql/Connect.php";

$q_fetch_lists = "SELECT * FROM reward";
$result_fetch_lists = mysqli_query($dbcon, $q_fetch_lists);
