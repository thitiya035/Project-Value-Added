<?php
session_start();
require '../../Mysql/Connect.php';

$id_user = $_SESSION['id_user'];

$sql = "SELECT * from user where id_user = '$id_user' ";
$result = mysqli_query($dbcon, $sql);
$detail_user = mysqli_fetch_assoc($result);

if ($_POST['submit_edit_user']) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $address = $_POST['address'];
    $conpass = $detail_user["password_user"];
    
    if ($oldpassword != $conpass)
    {
        $remine = [
            "status" => "wrongpass",
            "title" => "Fail!",
            "text" => "Old password incorrect",
            "icon" => "warning",
            "span" => "Old password incorrect\nPlease Enter again"
        ];

    } else {

        $edit_profile = "UPDATE user SET firstname_user = '$firstname',lastname_user = '$lastname', email_user = '$email', password_user = '$newpassword', address_user = '$address' WHERE id_user = '$id_user'";
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
                "status" => "fail",
                "title" => "Fail!",
                "text" => "Fail database",
                "icon" => "error"
            ];
        }
    }
    
}

echo json_encode($remine);
mysqli_close($dbcon);
