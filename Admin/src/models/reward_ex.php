<?php
require "../../../Mysql/Connect.php";
session_start();

$path = $_POST['path_ex'];

switch ($path) {
    case "add_track":
        $track = $_POST['track'];
        $id_ex_reward = $_SESSION["id_ex"];
        $db_update_track = "UPDATE `log_exchange_reward` 
                            SET `track_number_ex`=' $track',`status_ex`= 2 
                            WHERE `id_ex_reward` = ' $id_ex_reward'";
        $result_update_track = mysqli_query($dbcon, $db_update_track);

        if ($result_update_track) {
            $remine = [
                "status" => "update_tracking_success",
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
        break;
}

echo json_encode($remine);
mysqli_close($dbcon);
