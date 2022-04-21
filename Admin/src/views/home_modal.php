<?php
require './src/models/update_stock.php';
// require "./src/views/graph_modal.php";
// $_year = $_GET['year_chang'] ?? '';
?>
<div class="container pt-4">
    <h1 class="text-center mb-4 alert alert-secondary" style="font-size: 2em; ">Volume contained in the tank</h1>
    <div class="row text-center">
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>Clear plastic bottles</strong>
                </div>
                <div class="card-body">
                    <h1><?php echo $numbers[0] ?></h1>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>Opaque plastic bottles</strong>
                </div>
                <div class="card-body">
                    <h1><?php echo $numbers[1] ?></h1>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded ">
                <div class="card-header bg-secondary">
                    <strong>Cans</strong>
                </div>
                <div class="card-body">
                    <h1><?php echo $numbers[2] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <br>
        <h1 class="text-center mb-4 alert alert-secondary" style="font-size: 2em; ">Graph Of Year <?php echo $year_local ?></h1>
        <div class="row">
            <div class="col-md-7">
                <div id="container" class="mt-5" style="height: 450px; width: 700px;"></div>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
                <script type="text/javascript">
                    var dom = document.getElementById("container");
                    var myChart = echarts.init(dom);
                    var app = {};
                    var option;
                    option = {
                        title: {
                            text: 'Clear',
                            subtext: '<?php echo $year_local ?>',
                            left: 'center'
                        },
                        xAxis: {
                            type: 'category',
                            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yAxis: {
                            type: 'value',
                            // data: [10, 20, 30, 40, 50, 60],
                        },
                        series: [{
                            // data: [5, 6, 21, 11, 15, 14, 25],
                            data: [<?php for ($i = 1; $i <= 12; $i++) {
                                        echo $mouth_clear[$i] . ',';
                                    } ?>],
                            type: 'bar'
                        }]
                    };

                    if (option && typeof option === 'object') {
                        myChart.setOption(option);
                    }
                </script>
            </div>
            <div class="col-md-5 ">
                <div class=" float-right">
                    <!-- <form action="../Admin/src/models/graph.php" class="mt-2 mt-md-1"> -->
                    <label for="Year" class="text">History Of : </label>
                    <select id="mySelectYear" class="select_year">
                        <option selected="true" disabled="disabled">&nbsp;Choose Year&nbsp;
                            <?php
                            while ($year_show = mysqli_fetch_assoc($result_year)) {
                                if ($year_show['year'] != $year_local) { ?>
                        <option id="<?php echo$year_show['year'] ?> " value=" <?php echo$year_show['year']  ?> ">
                    <?php echo $year_show['year'];
                                }
                            }  ?>
                    </select>
                    &nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary btn_graph" style="font-size: 12px;border-radius: 12px;">Submit</button>
                    <!-- </form> -->
                </div>
                <div id="container1" class="mt-5" style="height: 450px; width: 400px;"></div>
                <script type="text/javascript">
                    var dom1 = document.getElementById("container1");
                    var myChart1 = echarts.init(dom1);
                    var app1 = {};
                    var option1;
                    option1 = {
                        title: {
                            text: 'Graph of Year',
                            subtext: '<?php echo $year_local ?>',
                            left: 'center'
                        },
                        tooltip: {
                            trigger: 'item'
                        },
                        legend: {
                            orient: 'vertical',
                            right: 'right'
                        },
                        series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: '55%',
                            data: [{
                                    value: <?php echo $total_year_clear
                                            ?>,
                                    name: 'Clear'
                                },
                                {
                                    value: <?php echo $total_year_can
                                            ?>,
                                    name: 'Can'
                                },
                                {
                                    value: <?php echo $total_year_opaque
                                            ?>,
                                    name: 'Opaque'
                                }
                            ],
                            emphasis: {
                                itemStyle: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            }
                        }]
                    };
                    if (option1 && typeof option1 === 'object') {
                        myChart1.setOption(option1);
                    }
                </script>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div id="container2" class="mt-5 " style="height: 450px; width: 630px;"></div>
                <script type="text/javascript">
                    var dom = document.getElementById("container2");
                    var myChart = echarts.init(dom);
                    var app = {};
                    var option2;
                    option2 = {
                        title: {
                            text: 'Opaque',
                            subtext: '<?php echo $year_local ?>',
                            left: 'center'
                        },
                        xAxis: {
                            type: 'category',
                            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yAxis: {
                            type: 'value',
                            // data: [10, 20, 30, 40, 50, 60],
                        },
                        series: [{
                            // data: [5, 6, 21, 11, 15, 14, 25],
                            data: [<?php for ($i = 1; $i <= 12; $i++) {
                                        echo $mouth_opaque[$i] . ',';
                                    } ?>],
                            type: 'bar'
                        }]
                    };

                    if (option2 && typeof option2 === 'object') {
                        myChart.setOption(option2);
                    }
                </script>
            </div>
            <div class="col-md-6">
                <div id="container3" class="mt-5" style="height: 450px; width: 630px;"></div>
                <script type="text/javascript">
                    var dom3 = document.getElementById("container3");
                    var myChart = echarts.init(dom3);
                    var app = {};
                    var option3;
                    option3 = {
                        title: {
                            text: 'Can',
                            subtext: '<?php echo $year_local ?>',
                            left: 'center'
                        },
                        xAxis: {
                            type: 'category',
                            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yAxis: {
                            type: 'value',
                            // data: [10, 20, 30, 40, 50, 60],
                        },
                        series: [{
                            data: [<?php for ($i = 1; $i <= 12; $i++) {
                                        echo $mouth_can[$i] . ',';
                                    } ?>],
                            type: 'bar'
                        }]
                    };

                    if (option3 && typeof option3 === 'object') {
                        myChart.setOption(option3);
                    }
                </script>
            </div>
        </div>
    </div>
</div>