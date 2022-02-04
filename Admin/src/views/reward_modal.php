<?php
require './src/models/reward.php';
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron ">
                <h1 class="display-4">Reward</h1>
            </div>
        </div>
        <div class="col-12 mb-3">
            <h1 class="badge " style="font-size: 1.75rem;"> List item reward </h1>
            <button type="button" class="btn btn-warning float-right" style="text-align: right" data-toggle="modal" data-target="#modal-reward-add">
                Add Reward
            </button>
        </div>
        <!-- <div class="col-12 text-right mb-3"> -->

        <!-- </div> -->
        <div class="col-12">
            <table class="table table-bordered shadow text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name of reward</th>
                        <th scope="col">Point of exchange</th>
                        <th scope="col">Setting</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($lists_reward = mysqli_fetch_assoc($result_fetch_lists)) { ?>
                        <tr>
                            <td scope="row"><?php echo $lists_reward['id_reward']; ?></td>
                            <td scope="row"><?php echo $lists_reward['name_reward']; ?></td>
                            <td scope="row"><?php echo $lists_reward['point_exchange_reward']; ?></td>
                            <td scope="row ">
                                <button class="btn btn-info reward_edit_modal" id="<?php echo $lists_reward['id_reward']; ?>">Edit</button>
                                <button class="btn btn-danger reward_delete" id="<?php echo $lists_reward['id_reward']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>