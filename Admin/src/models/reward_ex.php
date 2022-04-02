<?php
require "../../../Mysql/Connect.php";
session_start();

$path = $_POST['path_ex'];

switch ($path) {
    case "add_track":
        $track = $_POST['track'];
        $id_ex_reward = $_SESSION['id_ex_reward'];
        $db_update_track = "UPDATE `log_exchange_reward` 
                            SET `track_number_ex`=' $track',`status_ex`= 2
                            WHERE `id_ex_reward` = ' $id_ex_reward'";
        $result_update_track = mysqli_query($dbcon, $db_update_track);

        if ($result_update_track) {
            $remine = [
                // "status" => "update_tracking_success",
                "status" => $result_update_track,
                "title" => "Success!",
                "icon" => "success",
                "text" => "update tracking number success"
            ];
        } else {
            $remine = [
                "status" => "error_input_track",
                "title" => "Error!",
                "icon" => "error",
                "text" => "Error input tracking number",
            ];
        }
        unset($_SESSION['id_ex_reward']);
        break;
    case "show_model":
        $id_ex_reward = $_POST['id_ex_reward'];
        $_SESSION['id_ex_reward'] = $id_ex_reward;

        $search_id_ex_reward = "SELECT * FROM log_exchange_reward where id_ex_reward = '$id_ex_reward'";
        $result_search_id_ex_reward = mysqli_query($dbcon, $search_id_ex_reward);
        $result_id_ex = mysqli_fetch_assoc($result_search_id_ex_reward);

        if ($result_id_ex) {
            $remine = [
                "status" => "success",
                "name_user_ex" => $result_id_ex['name_user_ex'],
                "name_reward_ex" => $result_id_ex['name_reward_ex'],
                "address_user_ex" => $result_id_ex['address_user_ex'],
                "status_ex" => $result_id_ex['status_ex'],
                "date_ex" => $result_id_ex['date_ex'],
                "tracking" => $result_id_ex['track_number_ex'],
                "time_ex" => $result_id_ex['time_ex'],
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
}

echo json_encode($remine);
mysqli_close($dbcon);
