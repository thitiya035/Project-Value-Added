<div class="modal fade" id="modal-product_type_edit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">New Reward</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-9">
                        <label for="inputfullname" class="form-label">Name of reward (Thai)</label>
                    </div>
                    <div class="col-3">
                        <label for="inputfullname" class="form-label">Point to exchange</label>
                    </div>
                    <div class="form-group col-md-9 mt-2">
                        <div class="input-group">
                            <input type="text" class="form-control name_th_type_product_ed" name="type_product_name" aria-label="Type of product name (Thai)" disabled>
                        </div>
                    </div>
                    <div class="form-group col-md-3 mt-2">
                        <div class="input-group ">
                            <input type="text" class="form-control point_of_type_ed" name="point_type" aria-label="Point type" pattern="[0-9]{10}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="formsubmit" name="submit" class="btn btn-primary edit_point_type">Save changes</button>
            </div>
        </div>
    </div>
</div>