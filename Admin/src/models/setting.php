<?php
require '../../../Mysql/Connect.php';
$path = $_POST["path_setting"];
// $path = "edit_code";

switch ($path) {
    case ("edit_line_token"):
        $token_line = $_POST['token_line'];

        $update_token = "UPDATE `component` SET `token_line`='$token_line' WHERE 1";
        $result_update_token = mysqli_query($dbcon,  $update_token);

        if ($result_update_token) {
            $remine = [
                "status" => "success",
                "title" => "Success!",
                "text" => "Update token successfull!",
                "icon" => "success"
            ];
        } else {
            $remine = [
                "status" => "fail",
                "title" => "error!",
                "text" => "Update token fail in sql",
                "icon" => "error"
            ];
        }
        // break;

    case ("edit_code"):
        $code = $_POST['code'];
        $check = True;
        // $code = "15as";

        if (strlen($code) == 4) {
            for ($i = 0; $i < 4; $i++) {
                // echo $code[$i] . "<br>";
                if (
                    $code[$i] == '1' or $code[$i] == '2' or $code[$i] == '3' or $code[$i] == '4' or $code[$i] == '5'
                    or $code[$i] == '6' or $code[$i] == '7' or $code[$i] == '8' or $code[$i] == '9' or $code[$i] == '0'
                ) {
                    // echo "here 1 <br>";
                    continue;
                } else {
                    $remine = [
                        "status" => "warning",
                        "title" => "warning!",
                        "text" => "Please enter the code in number.",
                        "icon" => "warning"
                    ];
                    $check = FALSE;
                    break;
                }
            }

            if ($check) {
                $update_code = "UPDATE `component` SET `code`='$code' WHERE 1";
                $result_update_code = mysqli_query($dbcon,  $update_code);

                if ($result_update_code) {
                    $remine = [
                        "status" => "success",
                        "title" => "Success!",
                        "text" => "Update code successfull!",
                        "icon" => "success"
                    ];
                } else {
                    $remine = [
                        "status" => "fail",
                        "title" => "error",
                        "text" => "Update code fail in sql",
                        "icon" => "error"
                    ];
                }
            }
        }else{
            $remine = [
                "status" => "warning",
                "title" => "warning!",
                "text" => "Please enter the code 4 PIN.",
                "icon" => "warning"
            ];
        }
        break;
}

echo json_encode($remine);
mysqli_close($dbcon);
