<?php
require './Mysql/Connect.php';

$id_user = $_SESSION['id_user'];

    $q_total_point_user = "SELECT total_point_user FROM user where id_user ='$id_user'";
    $result_total_point = mysqli_query($dbcon, $q_total_point_user);
    $total_point = mysqli_fetch_assoc($result_total_point);
    
    // $row = mysqli_fetch_array($result_fetch_detail_user);

    $sql = "SELECT * FROM reward ORDER BY point_exchange_reward ASC";
    $result = $dbcon->query($sql);
    

