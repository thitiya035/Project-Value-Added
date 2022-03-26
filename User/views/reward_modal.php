<?php
require './User/models/reward.php';
?>

<div class="container ">
<div class="container d-flex justify-content-center">
    <div class="circle-bg ">
        <div class="h1">
            <?php 
                echo $total_point['total_point_user'] ;
            ?> 
        </div>
        <h2>Point</h2>
    </div>
</div>
</div>
    <div class="card ">
    <div class="text-light text-center d-flex" style="background-color:#b0db72; height: 70px;"><h2 class="col ">Rewards</h2> </div>
    
        <?php foreach ($result as $result): ?>
        <div>
            <table class="col" >
                <tbody>
                    <tr>
                    <th class="col-2 "><?php echo '<img src="data:image;base64,'.base64_encode($result['img_reward']).'">'; ?></th>
                        <td class="col-4" style="background-color:#fafcb4; height: 100px;"><h2 class="text-center" ><?php echo $result['name_reward']; ?></h2></td>
                        <td class="col-2" style="background-color:#fafcb4;" ><h4 class="text-center" ><input type="hidden" class="point" name="key" value="<?=$result['point_exchange_reward']?>" /><?php echo $result['point_exchange_reward'];?></h4></td>
                        <td class="col-2" style="background-color:#fafcb4;" ><button id="exchange" class="btn-block col-12 btn-lg text-light exchange" style="background-color:#ff9234" >Exchange</button></td>
                    </tr>
                </tbody>
            </table>
        
        </div> 
        <?php endforeach; ?>
    </div>
    


<footer class="page-footer">
    <div>
        <div class="text-center d-flex " style="background-color: rgba(0, 0, 0, 0.2);">
            <a href="profile.php" type="button" class="btn btn-warning col-12 btn-lg" >Back</a>
        </div>
    </div>
</footer>