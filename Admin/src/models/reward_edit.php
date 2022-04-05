<?php
require '../../../Mysql/Connect.php';

$path = $_POST['path_reward_edit'];
switch ($path) {
    case "show_model":
        $id_reward = $_POST['id_reward'];
        $search_id_raward = "SELECT * FROM reward where id_reward = '$id_reward'";
        $result_search_id_raward = mysqli_query($dbcon, $search_id_raward);
        $result = mysqli_fetch_assoc($result_search_id_raward);
        if ($result) {
            $remine = [
                "status" => "success",
                "name_reward_edit" => $result['name_reward'],
                "point_ex_reward_edit" => $result['point_exchange_reward'],
                "stock_ex_reward_edit" => $result['stock_reward']
            ];
        } else {
            $remine = [
                "status" => "fail",
                "title" => "Error!",
                "icon" => "error",
                "text" => "Erorr search id raward",
            ];
        }
        break;
    case "edit_reward":
        $id_reward = $_POST['id_reward'];
        $name_reward_edit = $_POST['name_reward_edit'];
        $point_ex_reward_edit = $_POST['point_ex_reward_edit'];
        $stock_ex_reward_edit = $_POST['stock_ex_reward_edit'];
        $update_reward = "UPDATE reward SET name_reward = '$name_reward_edit', point_exchange_reward = '$point_ex_reward_edit', stock_reward ='$stock_ex_reward_edit'
                          WHERE id_reward = '$id_reward'";
        $result_update_reward = mysqli_query($dbcon, $update_reward);
        if ($result_update_reward) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Edit reward successfull!"
            ];
        } else {
            $remine = [
                "status" => "fail",
                "title" => "Error!",
                "icon" => "error",
                "text" => "Erorr edit update reward"
            ];
        }
        break;
    case "delete_reward":
        $id_reward = $_POST['id_reward'];
        $delete_reward = "DELETE FROM reward WHERE id_reward = '$id_reward'";
        $result_delete_reward = mysqli_query($dbcon, $delete_reward);
        if ($result_delete_reward) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Delete itme reward success"
            ];
        } else {
            $remine = [
                "status" => "fail",
                "title" => "Error!",
                "icon" => "error",
                "text" => "Error delete reward"
            ];
        }
        break;
    default:
        $remine = [
            "status" => "fail",
            "title" => "Error!",
            "icon" => "error",
            "text" => "Don't qualify reward!"
        ];
}
echo json_encode($remine);
mysqli_close($dbcon);
