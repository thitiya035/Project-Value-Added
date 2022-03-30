<?php
require './User/models/reward.php';
?>

<!-- <header>
    <div class="mt-3">
        <a href="profile.php" type="button" class="btn btn-danger btn-lg float-right mr-3 col-1">Back</a>
    </div>
</header> -->


<!-- <div class="container "> -->
<!-- <div class="container d-flex justify-content-center"> -->
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

        <?php foreach ($result as $result) : ?>
            <div>
                <table class="col">
                    <tbody>
                        <tr>
                            <th class="col-2 "><?php echo '<img src="data:image;base64,' . base64_encode($result['img_reward']) . '">'; ?></th>
                            <td class="col-4" style="background-color:#fafcb4; height: 100px;">
                                <h2 class="text-center"><?php echo $result['name_reward']; ?></h2>
                            </td>
                            <td class="col-2" style="background-color:#fafcb4;">
                                <h4 class="text-center"><input type="hidden" class="point" name="key" value="<?= $result['point_exchange_reward'] ?>" /><?php echo $result['point_exchange_reward']; ?> &nbsp;&nbsp; Point</h4>
                            </td>
                            <td class="col-2" style="background-color:#fafcb4;"><button id="exchange" class="btn-block col-12 btn-lg text-light exchange " style="background-color:#ff9234">Exchange</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        <?php endforeach; ?>
    </div>
</div>
