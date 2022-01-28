<?php
require "../../../Mysql/Connect.php";

$path = $_POST['path_member'];
switch ($path) {
    case "member_add":
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $con_password = $_POST['con_password'];
        if ($password == $con_password) {
            $search_phone = "SELECT id_user From user WHERE phone_user = '$phone'";
            $result_search_phone = mysqli_query($dbcon, $search_phone);
            $count = mysqli_num_rows($result_search_phone);
            if ($count) { // Not Found phone user 
                $remine = [
                    "status" => "have_phone",
                    "title" => "Fail!",
                    "text" => "Already Use Phone Number",
                    "icon" => "warning",
                    "span" => "Already Use Phone Number!"
                ];
            } else {
                $add_new_user = "INSERT INTO user (phone_user,password_user,firstname_user,lastname_user,email_user,id_permission_user,address_user) VALUES ('$phone', '$password', '$firstname', '$lastname','$email','2','$address')";
                $result_add_new_user = mysqli_query($dbcon, $add_new_user);
                if ($result_add_new_user) {
                    $remine = [
                        "status" => "success",
                        "title" => "Success!",
                        "icon" => "success",
                        "text" => "Add new user successfull!"
                    ];
                } else {
                    $remine = [
                        "status" => "error_insert_user",
                        "title" => "Fail!",
                        "icon" => "error",
                        "text" => "Error Insert into user "
                    ];
                }
            }
        } else {
            $remine = [
                "status" => "password_notequal",
                "title" => "Warning!",
                "icon" => "warning",
                "text" => "Password did not match. Please try again."
            ];
        }
        break;
    case "delete":
        break;
}
echo json_encode($remine);
mysqli_close($dbcon);
