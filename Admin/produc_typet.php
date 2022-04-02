<?php
if (!empty($_SESSION['id_user'])) {
    header('Location:profile.php');
}
$header = "Type Of Product | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/product_type_modal.php.php";
// include "./src/views/product_add_modal.php";
include "./src/component/footage.php";
