<?php
require './src/models/product_fetch.php';
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron ">
                <h1 class="display-4">Type of product</h1>
            </div>
        </div>
        <!-- <div class="col-12 mb-3">
            <h1 class="badge " style="font-size: 1.75rem;"> list </h1>
            <button type="button" class="btn btn-warning float-right" style="text-align: right" data-toggle="modal" data-target="#modal-reward-add">
                Add Reward
            </button>
        </div> -->
        <!-- <div class="col-12 text-right mb-3"> -->

        <!-- </div> -->
        <div class="col-12">
            <table class="table table-bordered shadow text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Type of product name (Eng)</th>
                        <th scope="col">Type of product name (Thai)</th>
                        <th scope="col">Point</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $No = 0;
                    while ($lists_type_reward = mysqli_fetch_assoc($type_product)) {
                        $No = $No + 1;
                    ?>
                        <tr>
                            <td class="text-center"><?php echo ($No) ?></td>
                            <td scope="row"><?php echo $lists_type_reward['name_eng_type_product']; ?></td>
                            <td scope="row "><?php echo $lists_type_reward['name_th_type_product']; ?></td>
                            <td scope="row"><?php echo $lists_type_reward['point_of_type']; ?>
                                <button class="btn btn-info mr-2 float-right type_product_point_modal" id="<?php echo $lists_type_reward['id_type_product']; ?>">Edit</button> <!-- here -->
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>