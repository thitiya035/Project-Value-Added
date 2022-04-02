<?php
if(!empty($_SESSION['id_user'])){
    header('Location:profile.php');
}
$header = "Member | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/member_modal.php";
include "./src/views/member_add_modal.php";
include "./src/component/footage.php";  
