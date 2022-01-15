<?php
require './Mysql/Connect.php';
$id = $_SESSION['id_user'];

$sql = "SELECT * from user where id_user = '$id' ";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

