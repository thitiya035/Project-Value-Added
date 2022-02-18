<?php
require "./../Mysql/Connect.php";

$q_fetch_lists = "SELECT * FROM product INNER JOIN type_product ON product.id_type_product = type_product.id_type_product";
$result_fetch_lists = mysqli_query($dbcon, $q_fetch_lists);

$q_type_product = "SELECT id_type_product, name_th_type_product FROM type_product";
$type_product = mysqli_query($dbcon, $q_type_product);