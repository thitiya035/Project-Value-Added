<?php
require "../../../Mysql/Connect.php";

$path = $_POST['path_product'];
switch ($path) {
    case "product_add":
        $id_barcode = $_POST['id_barcode'];
        $name_product_thai = $_POST['name_product_thai'];
        $name_product_eng = $_POST['name_product_eng'];
        $brand_product = $_POST['brand_product'];
        $size = $_POST['size'];
        $id_type_product = $_POST['id_type_product'];

        $q_check_barcode = "SELECT id_product FROM product WHEN id_barcode_product = '$id_barcode'";
        $check_barcode = mysqli_query($dbcon, $q_check_barcode);

        if ($check_barcode) {  // have barcode in database
            $remine = [
                "status" => "have_barcode",
                "icon" => "warning",
                "title" => "Fail!",
                "text" => "Already ID barcode",
            ];
        } else {  // have not barcode in database
            $add_new_product = "INSERT INTO product (id_barcode_product,name_product_thai,name_product_eng,brand_product,size_product,id_type_product) 
                                VALUES ('$id_barcode','$name_product_thai','$name_product_eng','$brand_product','$size',' $id_type_product')";
            $result_add_new_product = mysqli_query($dbcon, $add_new_product);
            if ($result_add_new_product) {
                $remine = [
                    "status" => "success",
                    "title" => "Success!",
                    "icon" => "success",
                    "text" => "Add new product successfull!"
                ];
            } else {
                $remine = [
                    "status" => "error_add_product",
                    "title" => "Fail!",
                    "icon" => "error",
                    "text" => "Already ID barcode",
                ];
            }
        }
}

echo json_encode($remine);
mysqli_close($dbcon);
