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
        $id_permission_user = $_POST['id_permission'];
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
                $add_new_user = "INSERT INTO user (phone_user,password_user,firstname_user,lastname_user,email_user,id_permission_user,address_user) VALUES ('$phone', '$password', '$firstname', '$lastname','$email',$id_permission_user,'$address')";
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
    case "member_delete":
        $id_user = $_POST['id_user'];
        $delete_user = "DELETE FROM user WHERE id_user = '$id_user'";
        $result_delete_user = mysqli_query($dbcon, $delete_user);
        if ($result_delete_user) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Delete user success"
            ];
        } else {
            $remine = [
                "status" => "fail",
                "title" => "Error!",
                "icon" => "error",
                "text" => "Error deleting user from database"
            ];
        }
        break;
    case "show_model":
        $id_member = $_POST['id_member'];
        $db_search_user = "SELECT * From user WHERE id_user = '$id_member'";
        $result_db_search_user = mysqli_query($dbcon, $db_search_user);
        $result_search_user = mysqli_fetch_assoc($result_db_search_user);
        if ($result_search_user) {
            $remine = [
                "status" => "success",
                "id_member" =>  $id_member,
                "firstname" => $result_search_user['firstname_user'],
                "lastname" => $result_search_user['lastname_user'],
                "email" => $result_search_user['email_user'],
                "address" => $result_search_user['address_user'],
                "phone" => $result_search_user['phone_user'],
                "point" => $result_search_user['total_point_user'],
                "id_permission" => $result_search_user['id_permission_user']
            ];
        } else {
            $remine = [
                "status" => "can't contact database",
                "title" => "Fail!",
                "text" => "Fail edit user \n Can't contact database",
                "icon" => "error"
            ];
        }
        break;
    case "member_edit":
        $id_member = $_POST['id_member'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $id_permission_user = $_POST['id_permission'];

        $db_edit_member = "UPDATE user SET firstname_user = '$firstname', lastname_user = '$lastname',address_user = '$address',email_user = '$email', id_permission_user = $id_permission_user WHERE id_user = $id_member";
        $result_edit_member = mysqli_query($dbcon, $db_edit_member);
        if ($result_edit_member) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "icon" => "success",
                "text" => "Edit member success"
            ];
        } else {
            $remine = [
                "status" => "can't contact database",
                "title" => "Fail!",
                "text" => "Fail edit member \n Can't contact database",
                "icon" => "error"
            ];
        }
        break;
}
echo json_encode($remine);
mysqli_close($dbcon);
