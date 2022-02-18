<div class="modal fade" id="modal-product-add" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="barcode" class="form-label">Barcode</label>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-barcode"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control id_barcode" name="id_barcode" placeholder="ID Barcode" aria-label="ID Barcode">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="input-name-of-product-thai" class="form-label">Name of product (Thai)</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control name_product_thai" name="name_product_thai" placeholder="Name of product (Thai)" aria-label="Name of product (Thai)">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="input-name-of-product-eng" class="form-label">Name of product (Eng)</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control name_product_eng" name="name_product_eng" placeholder="Name of product (Eng)" aria-label="Name of product (Eng)">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputemail" class="form-label"> Brand of product </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-landmark"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control brand_product" name="brand_product" placeholder="Name Brand of product" aria-label="Name Brand of product">
                        </div>
                    </div>
                    <!-- <div class="col-6">
                        <label for="barcode" class="form-label">Size</label>
                    </div>
                    <div class="col-6">
                        <label for="barcode" class="form-label">Type</label>
                    </div> -->
                    <div class="col-6">
                        <label for="Size" class="form-label ml-1">Size</label>
                        <div class="form-group ">
                            <input type="text" class="form-control size" name="size" placeholder="Size of product" aria-label="Size of product">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="Type" class="form-label  ml-1">Type</label>
                        <div class="form-group ">
                            <select class="form-control id_type_product">
                                <option hidden value="">Select type product</option>
                                <?php
                                while ($list_type_product = mysqli_fetch_assoc($type_product)) {
                                ?>
                                    <option value="<?php echo $list_type_product['id_type_product'] ?>"><?php echo $list_type_product['name_th_type_product'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="formsubmit" name="submit" class="btn btn-primary product_add">Save changes</button>
            </div>
        </div>
    </div>
</div>