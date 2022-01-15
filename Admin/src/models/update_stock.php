<?php
   require "../Mysql/Connect.php";
   
    $q_fetch = "SELECT * FROM stock";
    $result_detail = mysqli_query($dbcon, $q_fetch);
    $i = 0;
    
    while ($obj = mysqli_fetch_object($result_detail)){
        $numbers[] =  $obj->number;
     }
   
?>