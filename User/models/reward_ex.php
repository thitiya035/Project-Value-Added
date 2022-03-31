<?php
require '../../Mysql/Connect.php';
session_start();
$id_reward = $_POST['id_reward'];
$id_user = $_SESSION['id_user'];

date_default_timezone_set("Asia/Bangkok");
$new_startDate = date("d/m/Y", time());
$new_startTime = date("H:i:s", time());

$db_reward = "SELECT * from reward where id_reward = '$id_reward' ";
$result_db_reward = mysqli_query($dbcon, $db_reward);
$detail_reward = mysqli_fetch_assoc($result_db_reward);

$db_user = "SELECT * from user where id_user = '$id_user' ";
$result_db_user = mysqli_query($dbcon, $db_user);
$detail_user = mysqli_fetch_assoc($result_db_user);
$name_user = $detail_user["firstname_user"] . " " . $detail_user["lastname_user"];
$address_user = $detail_user["address_user"];
$name_reward = $detail_reward["name_reward"];

if ($detail_reward['stock_reward'] != 0) {
    $db_insert_ex = "INSERT INTO log_exchange_reward(name_user_ex, name_reward_ex, address_user_ex, track_number_ex, status_ex, date_ex, time_ex) 
    VALUES ('$name_user','$name_reward','$address_user','',1,'$new_startDate','$new_startTime')";
    $result_log_ex = mysqli_query($dbcon, $db_insert_ex);
    if ($result_log_ex) {
        $point = $detail_user["total_point_user"] - $detail_reward["point_exchange_reward"];
        $db_update_point = "UPDATE user SET total_point_user = $point WHERE id_user = '$id_user'";
        $result_update_point = mysqli_query($dbcon, $db_update_point);
        if ($result_update_point) {
            $stock_reward = $detail_reward["stock_reward"] - 1;
            $db_update_stock = "UPDATE reward SET stock_reward = $stock_reward WHERE id_reward = '$id_reward'";
            $result_update_stock = mysqli_query($dbcon, $db_update_stock);
            if ($result_update_stock) {
                $remine = [
                    "status" => "success insert log exchange",
                    "title" => "Success!",
                    "text" => "Wait admin sent order number track ",
                    "icon" => "success"
                ];
            } else {
                $remine = [
                    "status" => "Can't update stock action",
                    "title" => "Fail!",
                    "text" => "Database update stock error",
                    "icon" => "error"
                ];
            }
        } else {
            $remine = [
                "status" => "Can't update point action",
                "title" => "Fail!",
                "text" => "Database update point error",
                "icon" => "error"
            ];
        }
    } else {
        $remine = [
            "status" => "Can't insert into",
            "title" => "Fail!",
            "text" => "Database insert error",
            "icon" => "error"
        ];
    }
} else {
    $remine = [
        "status" => "stock_reward = 0 , can't exchange",
        "title" => "Fail!",
        "text" => "Out of stock" . $detail_reward['name_reward'],
        "icon" => "error"
    ];
}



echo json_encode($remine);
mysqli_close($dbcon);
