<?php
$header = "Barcode | Admin";
include '../component/header.php';
?>

<div class="container">
    <div class="text-center mt-5">
        <h1>Barcode</h1>
    </div>
    <div class="col-centered ">
        <div class="form-group">
            <input type="text" name="barcode">
            <input class="ml-3" type="submit" name="submit">
        </div>
    </div>
</div>

<?php
include '../component/footage.php';
?>