<?php
require "../../../Mysql/Connect.php";

if ($_POST["submit_add_reward"]) {
    $name_reward = $_POST['name_reward'];
    $point_ex_reward = $_POST['point_ex_reward'];

    $add_reward = "INSERT INTO reward (name_reward,point_exchange_reward) VALUES ('$name_reward', '$point_ex_reward')";
    $result_add_reward = mysqli_query($dbcon, $add_reward);
    if ($result_add_reward) {
        $remine = [
            "status" => "success",
            "title" => "Success!",
            "text" => "Add new reward successfull!",
            "icon" => "success"
        ];
    } else {
        $remine = [
            "status" => "can't contact database",
            "title" => "Fail!",
            "text" => "Fail add reward \n Can't contact database",
            "icon" => "error"
        ];
    }
} else {
    $remine = [
        "status" => "no action submit add reward",
        "title" => "Fail!",
        "text" => "Fail save add reward \n Can't contact database",
        "icon" => "error"
    ];
}
echo json_encode($remine);
mysqli_close($dbcon);

