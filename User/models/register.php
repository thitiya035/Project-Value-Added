<?php

require '../../Mysql/Connect.php';

if ($_POST['submit_register']) {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $con_password = trim($_POST['con_password']);

    if (($firstname) == "" || ($lastname) == "" || ($email) == "" || ($phone) == "" || ($password) == "") {
        $remine = [
            "status" => "Incomplete",
            "title" => "Incomplete Information",
            "text" => "Please fill your information",
            "icon" => "warning",
        ];
    } else {

        $search_phone = "SELECT id_user From user WHERE phone_user = '$phone'";
        $result_search_phone = mysqli_query($dbcon, $search_phone);
        $count = mysqli_num_rows($result_search_phone);

        if ($password == $con_password) {
            if ($count) { // Found phone user 
                $remine = [
                    "status" => "have_phone",
                    "title" => "Fail!",
                    "text" => "Already Use Phone Number",
                    "icon" => "warning",
                ];
            } else { // Not Found phone user 
                $add_new_user = "INSERT INTO user (phone_user,password_user,firstname_user,lastname_user,email_user,id_permission_user,address_user) VALUES ('$phone', '$password', '$firstname', '$lastname','$email','2','')";
                $result_add_new_user = mysqli_query($dbcon, $add_new_user);
                if ($result_add_new_user) {

                    $result_search_phone = mysqli_query($dbcon, $search_phone);
                    $detail = mysqli_fetch_assoc($result_search_phone);
                    
                    session_start();
                    $_SESSION['id_user'] = $detail['id_user'];

                    $remine = [
                        "status" => "success",
                        "session" => $_SESSION['id_user'],
                        "title" => "Success!",
                        "text" => "Register successfull!",
                        "icon" => "success"
                    ];
                } else {
                    $remine = [
                        "status" => "fail",
                        "title" => "Fail!",
                        "text" => "Insert User Error",
                        "icon" => "error"
                    ];
                }
            }
        } else {
            $remine = [
                "status" => "password_notequal",
                "title" => "Warning!",
                "text" => "Password did not match. Please try again.",
                "icon" => "warning"
            ];
        }
    }

    echo json_encode($remine);
}

mysqli_close($dbcon);
