<?php
session_start();
require '../../Mysql/Connect.php';

$id_user = $_SESSION['id_user'];

$path = $_POST['path'];

$sql = "SELECT * from user where id_user = '$id_user' ";
$result = mysqli_query($dbcon, $sql);
$detail_user = mysqli_fetch_assoc($result);

switch ($path) {
    case 'edit_user':
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $edit_profile = "UPDATE user SET firstname_user = '$firstname',lastname_user = '$lastname', email_user = '$email',
                        address_user = '$address' WHERE id_user = '$id_user'";
        $result_edit_profile = mysqli_query($dbcon, $edit_profile);

        if ($result_edit_profile) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "text" => "Update Profile successfull!",
                "icon" => "success"
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
    case 'edit_password':
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        if ($new_password == $confirm_password) {
            $password_user = $detail_user['password_user'];
            if ($password_user == $old_password) {
                $db_update_password = "UPDATE user SET password_user = '$new_password' WHERE id_user = '$id_user'";
                $result_update_password = mysqli_query($dbcon, $db_update_password);
                if ($result_update_password) {
                    $remine = [
                        "status" => "success",
                        "title" => "Success!",
                        "text" => "Update password successfull!",
                        "icon" => "success"
                    ];
                } else {
                    $remine = [
                        "status" => "can't contact database",
                        "title" => "Fail!",
                        "text" => "Fail edit user \n Can't contact database",
                        "icon" => "error"
                    ];
                }
            } else {
                $remine = [
                    "status" => "password user is incorrect",
                    "title" => "Fail!",
                    "text" => "Password user is incorrect. \n Please check password.",
                    "icon" => "warning"
                ];
            }
        } else {
            $remine = [
                "status" => "new password and confirmpassword not math",
                "title" => "Fail!",
                "text" => "Password confirm does't match. \n Please check confirm password.",
                "icon" => "warning"
            ];
        }
        break;
}

echo json_encode($remine);
mysqli_close($dbcon);
