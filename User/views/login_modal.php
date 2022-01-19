<?php
require_once './User/views/register_modal.php';
?>
<div class="container h-100">
    <div class="container h-100 justify-content-center">
        <div class="logo">
            <img id="img" class="img-fu" src="" width="100%" height="100%">
        </div>
        <div class="col-centered ">
            <div class="form-group">
                <label for="userphone" class="text">Phone</label>
                <input type="tel" class="form-control userphone" id="userphone" placeholder="Enter your phone number" name="userphone" pattern="[0-9]{10}"required>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Your Phone number must be 10 number.
                </small>
            </div>
            <div class="form-group">
                <label for="password" class="text">Password:</label>
                <input type="password" class="form-control password" id="password" placeholder="Enter password" name="password" required>
                <!-- <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>
            <div class="pt-4 d-flex justify-content-center">
                <button type="submit" class="btn btn-warning btn-block login">Submit</button>
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-register">
                    <u>Register</u>
                </button>
            </div>
        </div>
    </div>
</div>
