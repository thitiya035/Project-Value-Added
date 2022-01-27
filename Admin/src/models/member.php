<?php 
    require "./../Mysql/Connect.php";

    $q_fetch_lists = "SELECT id_user,firstname_user,lastname_user,address_user,email_user,phone_user,total_point_user FROM user";
    $result_fetch_lists = mysqli_query($dbcon,$q_fetch_lists);