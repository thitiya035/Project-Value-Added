<?php
require './src/models/product_fetch.php';
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron">
                <h1 class="display-4">Product</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h1 class="badge badge-info" style="font-size: 1.25em;">Product Lists</h1>
            </h1>
        </div>

        <div class="col-12 text-right mb-2">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-product-add">
                Add Product
            </button>
        </div>
        <div class="col-12">
            <table class="table table-bordered shadow">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">ID barcode of product</th>
                        <th scope="col">Name of product</th>
                        <th scope="col">Brand of product</th>
                        <th scope="col">Type of product</th>
                        <th scope="col">Size of product</th>
                        <th scope="col">Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $No = 0;
                    while ($lists_product = mysqli_fetch_assoc($result_fetch_lists)) {
                        $No = $No + 1;
                    ?>
                        <tr>
                            <td class="text-center"><?php echo ($No) ?></td>
                            <td scope="row"><?php echo $lists_product['id_barcode_product']; ?></td>
                            <td scope="row"><?php echo $lists_product['name_product_thai']; ?></td>
                            <td scope="row"><?php echo $lists_product['brand_product']; ?></td>
                            <td scope="row"><?php echo $lists_product['name_th_type_product']; ?></td>
                            <td scope="row" class="text-center"><?php echo $lists_product['size_product']; ?></td>
                            <td scope="row" class="text-center">
                                <button class="btn btn-info product_edit_modal" id="<?php echo $lists_product['id_product']; ?>">Edit</button>
                                <button class="btn btn-danger product_delete" id="<?php echo $lists_product['id_product']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>