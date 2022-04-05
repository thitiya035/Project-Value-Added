<?php
require '../../Mysql/Connect.php';
// require './Mysql/Connect.php';

if ($_POST['submit_login']) {
    $userphone = $_POST['userphone'];
    $password = $_POST['password'];

    $q_search_user = "SELECT id_user,id_permission_user From user WHERE phone_user = '$userphone' AND password_user = '$password'";
    $result_search = mysqli_query($dbcon, $q_search_user);
    $detail = mysqli_fetch_assoc($result_search);
    $count = mysqli_num_rows($result_search);

    // echo "permission test " . $detail['id_permission_user'];
    if ($count != 0) {
        session_start();
        $_SESSION['id_user'] = $detail['id_user'];
        if ($detail['id_permission_user'] == 1) {
            $_SESSION['permission'] = "admin";
            $remine = [
                "status" => "success",
                "permission" => "admin"
            ];
        } else {
            $_SESSION['permission'] = "user";
            $remine = [
                "status" => "success",
                "permission" => "user"
            ];
        }
        echo json_encode($remine);
    } else {
        $remine = [
            "status" => "fail",
            "title" => "Fail!",
            "text" => "Incorrect username or password!",
            "icon" => "warning",
            "span" => "Incorrect username or password!"

        ];
        echo json_encode($remine);
    }
}
