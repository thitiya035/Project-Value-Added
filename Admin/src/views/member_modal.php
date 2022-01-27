<?php
require './src/models/member.php';
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron">
                <h1 class="display-4">Member</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <h1 class="badge " style="font-size: 1.75rem;">Member Lists </h1>
            <button type="button" class="btn btn-warning float-right" style="text-align: right" data-toggle="modal" data-target="#modal-add-member">
                Add Member
            </button>
        </div>
        <!-- <div class="col-12 text-right mb-2">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-add-member">
                Add Member
            </button>
        </div> -->
        <div class="col-12">
            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Point</th>
                        <th scope="col">Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($lists_user = mysqli_fetch_assoc($result_fetch_lists)) {
                    ?>
                        <tr>
                            <td><?php echo $lists_user['id_user']; ?></td>
                            <td><?php echo $lists_user['firstname_user'] . '&nbsp;&nbsp;&nbsp;' .  $lists_user['lastname_user']; ?></td>
                            <td><?php echo $lists_user['address_user']; ?></td>
                            <td><?php echo $lists_user['email_user']; ?></td>
                            <td><?php echo $lists_user['phone_user']; ?></td>
                            <td><?php echo $lists_user['total_point_user']; ?></td>
                            <td>
                                <button class="btn btn-info btn_edit_detail_user" id="<?php echo $lists_user['id_user']; ?>">Edit</button>
                                <button class="btn btn-danger btn_delete_detail_user" id="<?php echo $lists_user['id_user']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>