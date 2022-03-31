<?php
require './src/models/reward_ex_fetch.php';
?>
<div class="container h-100">
    <div class="modal fade" id="modal-history-ex-reward" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h2 class="badge " style="font-size: 1.3rem;">History Exchange Of Reward</h2>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!-- <div class="col-12 mb-3 mt-3">
                <h1 class="badge " style="font-size: 1.3rem;">List Exchange Of Reward</h1>
                
            </div> -->

                <div class="col-12">
                    <table class="table table-bordered shadow text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name user</th>
                                <th scope="col">Name of reward</th>
                                <th scope="col">Address</th>
                                <th scope="col">Status</th>
                                <th scope=" col" colspan="2">Tracking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $No = 0;
                            while ($lists_ex = mysqli_fetch_assoc($result_fetch_ex)) {
                            ?>
                                <tr>
                                    <?php if ($lists_ex['status_ex'] == 2) {
                                        $No = $No + 1;
                                    ?>
                                        <td class="text-center"><?php echo ($No) ?></td>
                                        <td scope="row"><?php echo $lists_ex['name_user_ex']; ?></td>
                                        <td scope="row"><?php echo $lists_ex['name_reward_ex']; ?></td>
                                        <td scope="row"><?php echo $lists_ex['address_user_ex']; ?></td>
                                        <td scope="row">
                                            <i class="fa fa-check-square-o" style="font-size:25px;"></i>
                                        </td>
                                        <td scope="row ">
                                            <?php echo $lists_ex['track_number_ex'];
                                            $_SESSION['id_ex'] = $lists_ex['id_ex_reward']; ?>
                                        </td>
                                        <td scope="row "><button class="btn btn-info mr-2 " data-toggle="modal" data-target="#modal-input-track">Edit</button></td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary col-1" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>