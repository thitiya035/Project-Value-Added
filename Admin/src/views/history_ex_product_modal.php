<?php
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
            <h1 class="badge " style="font-size: 1.75rem;">History Lists </h1>
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
                <tr>
                    <td class="text-center"> </td>

                </tr>
            </tbody>
        </table>
    </div>
</div>