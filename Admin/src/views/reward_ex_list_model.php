<?php
require './src/models/reward_ex_fetch.php';
session_start();
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron ">
                <h1 class="display-4">Exchange Of Reward</h1>
            </div>
        </div>
        <div class="col-12 mb-3">
            <h1 class="badge " style="font-size: 1.3rem;">List Exchange Of Reward</h1>
            <button type="button" class="btn btn-secondary float-right mr-3 " style="text-align: right" data-toggle="modal" data-target="#modal-history-ex-reward">
                history
            </button>
        </div>
        <!-- <div class="col-12 text-right mb-3"> -->

        <!-- </div> -->
        <div class="col-12">
            <table class="table table-bordered shadow text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name user</th>
                        <th scope="col">Name of reward</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Sent Reward</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $No = 0;
                    while ($lists_ex = mysqli_fetch_assoc($result_fetch_ex)) {
                    ?>
                        <tr>
                            <?php if ($lists_ex['status_ex'] == 1) {
                                $No = $No + 1;
                            ?>
                                <td class="text-center"><?php echo ($No) ?></td>
                                <td scope="row"><?php echo $lists_ex['name_user_ex']; ?></td>
                                <td scope="row"><?php echo $lists_ex['name_reward_ex']; ?></td>
                                <td scope="row"><?php echo $lists_ex['address_user_ex']; ?></td>
                                <td scope="row">Order</td>
                                <td><button type="button" id=" <?php echo $lists_ex['id_ex_reward']; ?>" class=" btn btn-info reward_ex_modal_add">Submit</button> </td>

                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>