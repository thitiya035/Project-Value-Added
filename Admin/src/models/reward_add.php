<?php
require "../../../Mysql/Connect.php";

if ($_POST["submit_add_reward"]) {
    $name_reward = $_POST['name_reward'];
    $point_ex_reward = $_POST['point_ex_reward'];
    $file_reward = $_POST['file_reward'];

    $add_reward = "INSERT INTO reward (name_reward,point_exchange_reward,img_reward) VALUES ('$name_reward', '$point_ex_reward', '$file_reward')";
    $result_add_reward = mysqli_query($dbcon, $add_reward);
    if ($result_add_reward) {
        $remine = [
            "status" => "success",
            "title" => "Success!",
            "text" => "Add new reward successfull!",
            "icon" => "success"
        ];
    }
    echo json_encode($remine);
}
mysqli_close($dbcon);
