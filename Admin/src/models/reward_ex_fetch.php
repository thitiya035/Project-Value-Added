<?php
require "../Mysql/Connect.php";

$db_fetch_ex = "SELECT * FROM log_exchange_reward";
$result_fetch_ex = mysqli_query($dbcon, $db_fetch_ex);

