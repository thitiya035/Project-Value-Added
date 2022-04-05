<?php
require "../../../Mysql/Connect.php";

$path = $_POST['path_tp'];
switch ($path) {
    case "show_modal":
        $id_type_product = $_POST['id_type_product'];
        $db_id_type_product = "SELECT * FROM type_product WHERE id_type_product = '$id_type_product'";
        $result_type_product = mysqli_query($dbcon, $db_id_type_product);
        $search_type_product = mysqli_fetch_assoc($result_type_product);

        if ($search_type_product) {
            $remine = [
                "status" => "success",
                "id_type_product_ed" =>  $id_type_product,
                "name_th_type_product_ed" => $search_type_product['name_th_type_product'],
                "point_of_type_ed" => $search_type_product['point_of_type'],
            ];
        } else {
            $remine = [
                "status" => "can't contact database",
                "title" => "Fail!",
                "text" => "Fail show modal type product \n Can't contact database",
                "icon" => "error"
            ];
        }
        break;
    case "edit_point":
        $id_type_ed = $_POST['id_type'];
        $point_ed = $_POST['point_ed'];

        $db_edit_point = "UPDATE type_product SET point_of_type ='$point_ed' WHERE id_type_product = '$id_type_ed'";
        $result_edit_point = mysqli_query($dbcon, $db_edit_point);
        if ($result_edit_point) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Edit point success"
            ];
        } else {
            $remine = [
                "status" => "can't contact database",
                "title" => "Fail!",
                "text" => "Fail edit point type product \n Can't contact database",
                "icon" => "error"
            ];
        }
        break;
}

echo json_encode($remine);
mysqli_close($dbcon);
