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
        break;
    case "product_delete":
        $id_product = $_POST['id_product'];
        $delete_product = "DELETE FROM product WHERE id_product = '$id_product'";
        $result_delete_product = mysqli_query($dbcon, $delete_product);
        if ($result_delete_product) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Delete product success"
            ];
        } else {
            $remine = [
                "status" => "fail",
                "title" => "Error!",
                "icon" => "error",
                "text" => "Error deleting product from database",
            ];
        }
        break;
    case "show_edit_modal":
        $id_product_mo = $_POST['id_product'];

        $db_search_product = "SELECT * FROM product WHERE id_product ='$id_product_mo'";
        $search_product = mysqli_query($dbcon, $db_search_product);
        $result_search_product = mysqli_fetch_assoc($search_product);
        if ($result_search_product) {
            $remine = [
                "status" => "success",
                "id_product_ed" =>  $id_product_mo,
                "id_barcode_ed" => $result_search_product['id_barcode_product'],
                "name_product_thai_ed" => $result_search_product['name_product_thai'],
                "name_product_eng_ed" => $result_search_product['name_product_eng'],
                "brand_product_ed" => $result_search_product['brand_product'],
                "size_ed" => $result_search_product['size_product'],
                "id_type_product_ed" => $result_search_product['id_type_product']
            ];
        } else {
            $remine = [
                "status" => "can't contact database",
                "title" => "Fail!",
                "text" => "Fail show product \n Can't contact database",
                "icon" => "error"
            ];
        }
        break;
    case "edit_product":
        $id_product_ed = $_POST['id_product_ed'];
        $id_barcode_ed = $_POST['id_barcode_ed'];
        $name_product_thai_ed = $_POST['name_product_thai_ed'];
        $name_product_eng_ed = $_POST['name_product_eng_ed'];
        $brand_product_ed = $_POST['brand_product_ed'];
        $size_ed = $_POST['size_ed'];
        $id_type_product_ed = $_POST['id_type_product_ed'];

        $db_update_product = "UPDATE product SET id_barcode_product ='$id_barcode_ed',
                            name_product_thai ='$name_product_thai_ed',name_product_eng ='$name_product_eng_ed',
                            brand_product ='$brand_product_ed',size_product ='$size_ed',id_type_product ='$id_type_product_ed' 
                            WHERE id_product = '$id_product_ed'";
        $update_product = mysqli_query($dbcon, $db_update_product);
        if ($update_product) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Edit product success"
            ];
        } else {
            $remine = [
                "status" => "can't contact database",
                "title" => "Fail!",
                "text" => "Fail edit product \n Can't contact database",
                "icon" => "error"
            ];
        }
        break;
}

echo json_encode($remine);
mysqli_close($dbcon);
