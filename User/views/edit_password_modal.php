<div class="modal fade" id="modal-edit-password" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="ModalLongTitle">Edit Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="inputpassword" class="form-label">Old Password</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control old_password" placeholder="Enter old password" rows="3" cols="30" name="old_password" aria-label="Old Password"></input>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputpassword" class="form-label">New Password</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control new_password" placeholder="Enter new password" rows="3" cols="30" name="new_password" aria-label="New Password"></input>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputpassword" class="form-label">Confirm Password</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control confirm_password" placeholder="Enter confirm password" rows="3" cols="30" name="confirm_password" aria-label="Confirm Password"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="formsubmit" name="submit" class="btn btn-primary edit_passward">Edit Password</button>
            </div>
        </div>
    </div>
</div>