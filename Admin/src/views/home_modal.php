<div class="container pt-4">
    <?php
    require_once './src/models/update_stock.php';
    ?>
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
                            text: 'Referer of a Website',
                            // subtext: 'Fake Data',
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
                            data: [
                                <?php
                                // while ($row = mysqli_fetch_array($result_search))
                                for ($i = 1; $i <= 12; $i++) {
                                    echo $mouth_clear[$i] . ',';
                                }
                                ?>
                            ],
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
                    <label for="Type">Type : </label>
                    <select id="mySelectType" class="select_type">
                        <?php while ($q_type = mysqli_fetch_assoc($result_type)) { ?>
                            <option value=" <?php echo $q_type['name_eng_type_product'] ?>"><?php echo $q_type['name_th_type_product'] ?>
                            <?php } ?>
                    </select>
                    &nbsp;&nbsp;
                    <label for="Year" class="text ">Year : </label>
                    <select id="mySelectYear" class="select_year">
                        <?php while ($q_year = mysqli_fetch_assoc($result_year)) { ?>
                            <option value=" <?php echo $q_year['year'] ?>"><?php echo $q_year['year'] ?>
                            <?php } ?>
                    </select>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-primary btn_graph" style="font-size: 12px;border-radius: 12px;">Submit</button>
                </div>
                <div id="container1" class="mt-5" style="height: 450px; width: 400px;"></div>
                <script type="text/javascript">
                    var dom1 = document.getElementById("container1");
                    var myChart1 = echarts.init(dom1);
                    var app1 = {};
                    var option1;
                    option1 = {
                        title: {
                            text: 'Referer of a Website',
                            subtext: 'Fake Data',
                            left: 'left'
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
                            radius: '50%',
                            data: [{
                                    value: 1048,
                                    name: 'Search Engine'
                                },
                                {
                                    value: 735,
                                    name: 'Direct'
                                },
                                {
                                    value: 580,
                                    name: 'Email'
                                },
                                {
                                    value: 484,
                                    name: 'Union Ads'
                                },
                                {
                                    value: 300,
                                    name: 'Video Ads'
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
    </div>
</div>
<!-- <div>
        <h1 class="text-center mb-4 alert alert-secondary" style="font-size: 2em; ">Point history</h1>
    </div>
    <div class="row text-center">
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>TOP POINT</strong>
                </div>
                <div class="card-body text-left">
                    <?php #include './src/views/show_point.php' 
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>TOP POINT OF TO DAY</strong>
                </div>
                <div class="card-body">
                    <?php #include './src/views/show_point_today.php' 
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong>TOP POINT OF MOUTH</strong>
                </div>
                <div class="card-body">
                    <?php #include './src/views/show_point_mouth.php'  
                    ?>
                </div>
            </div>
        </div>
    </div> -->