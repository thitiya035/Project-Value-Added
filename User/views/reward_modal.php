<?php
require './User/models/reward.php';
?>

<div class="container mt-3 float-right">
    <a href="profile.php" type="button" class="btn btn-danger btn-lg float-right mr-3 col-2">Back</a>
</div>
<div class="container d-flex justify-content-center">
    <div class="circle-bg">
        <div class="h1" style="font-size: 4rem;">
            <?php echo $total_point['total_point_user']; ?>
        </div>
        <h2 style="font-size: 2rem;">Point</h2>
    </div>
</div>

<div class="container ">
    <div class="card">
        <div class="text-light text-center d-flex" style="background-color:#b0db72; height: 70px;">
            <h2 class="col mt-3"> <strong>Rewards</strong></h2>
        </div>

        <?php
        while ($result_fetch = mysqli_fetch_assoc($result)) {
        ?>
            <div>
                <table class="col">
                    <tbody>
                        <tr>
                            <th class="col-2 "><?php echo '<img src="data:image;base64,' . base64_encode($result_fetch['img_reward']) . '">'; ?></th>
                            <td class="col-4" style="background-color:#fafcb4; height: 100px;">
                                <h2 class="text-center"><?php echo $result_fetch['name_reward']; ?></h2>
                            </td>
                            <td class="col-2" style="background-color:#fafcb4;">
                                <h4 class="text-center">
                                    <input type="hidden" value="<?php echo $result_fetch['point_exchange_reward'] ?>" /><?php echo $result_fetch['point_exchange_reward']; ?> &nbsp;&nbsp; Point
                                </h4>
                            </td>
                            <td class="col-2" style="background-color:#fafcb4;">
                                <?php if ($result_fetch['stock_reward'] == 0) { ?>
                                    <button type="button" class="btn-block col-12 btn-lg text-light reward_ex" style="background-color:#C0C0C0" disabled> Out of stock </button>
                                <?php } else { ?>
                                    <button type="button" class="btn-block col-12 btn-lg text-light reward_ex" style="background-color:#ff9234" id="<?php echo $result_fetch['id_reward']; ?>"> Exchange </button>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php  } ?>

    </div>
</div>