<?php
if (!empty($_SESSION['id_user'])) {
    header('Location:profile.php');
}
$header = "Product | Admin";
include "./src/component/header.php";
include "./src/component/nev.php";
include "./src/views/product_modal.php";
include "./src/views/product_add_modal.php";
include "./src/component/footage.php";
