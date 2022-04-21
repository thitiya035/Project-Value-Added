<?php
require './src/models/history_ex_fetch.php';
$_day = $_GET['day_ex'] ?? '';
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron">
                <h1 class="display-4">History Exchange product</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <h1 class="badge " style="font-size: 1.75rem;">History Lists is <?php echo $day_local ?></h1>
            <form action="../Admin/src/models/history_ex.php" class="mt-2 mt-md-1">
                <div class="float-right">
                    <label id="date">วันที่</label>
                    <input type="date" name="day" class="date_input" value="<?= $_day ?>">
                    <button class="btn btn-success date_12" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-bordered shadow">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID User</th>
                    <th scope="col">Funtion</th>
                    <th scope="col">Id product</th>
                    <th scope="col">Name product</th>
                    <th scope="col">Type</th>
                    <th scope="col">Point</th>
                    <th scope="col">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                            <?php
                            if (mysqli_fetch_object($result_his_ex)) {
                                $no = 0;
                                while ($row = mysqli_fetch_object($result_his)){
                                    $no++;
                            ?>            
                                <tr class="text-center">
                                    <td> <?php echo $no  ?>   </td>
                                    <td> <?php echo $row->id_user  ?>   </td>
                                    <td> <?php echo $row->group_step ?> </td>
                                    <td> <?php echo $row->id_product  ?>  </td>
                                    <td> <?php echo $row->name_product ?> </td>
                                    <td> <?php echo $row->type_product ?> </td>
                                    <td> <?php echo $row->point_product ?> </td>
                                    <td> <?php echo $row->date_exchange_point ."'&nbsp;&nbsp;". $row->time_exchange_point	?> </td>
                                </tr>
                        <?php   } 
                            } else { ?>
                            <tr class="text-center">
                                <td colspan="8"> <h4><strong><?php echo "<br> Not Found <br><br>"; ?> </strong></h4></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
        </table>
    </div>
</div>