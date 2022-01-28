<div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLongTitle">Add Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="inputfullname" class="form-label">Full Name</label>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control firstname" name="firstname" placeholder="First name" aria-label="First name">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control lastname" name="lastname" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputemail" class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control email" name="email" placeholder="email@example.com" aria-label="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputpassword" class="form-label">Address</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-home"></i>
                                    </span>
                                </div>
                                <textarea class="form-control address" rows="3" cols="30" name="address" placeholder="Address.." aria-label="Address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputphone" class="form-label">Phone Number</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone"></i>
                                </span>
                            </div>
                            <input type="number" class="form-control phone" name="phone" placeholder="Phone number" aria-label="Phone" maxlength="10" pattern="[0-9\s\d]{10}$" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputpassword" class="form-label">Password</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control password" name="repassword" placeholder="Password" aria-label="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control con_password" name="con_repassword" placeholder="Confirm Password" aria-label="Password">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputphone" class="form-label">Permission</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-tag"></i>
                                </span>
                            </div>
                            <select class="form-control id_permission">
                                <option value="1">User</option>
                                <option value="0">Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="formsubmit" name="submit" class="btn btn-primary member_add">Save changes</button>
            </div>
        </div>
    </div>
</div>