<?php
require './src/models/setting_fetch.php';
?>

<div class="container pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <div class="jumbotron">
                <h1 class="display-4">Setting</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong class="t">Line Notify Token</strong>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card shadow rounded">
                <div class="card-header">
                    <span>
                        <p class="font-weight-bold"> Token is : <?php echo $component->token_line;  ?></p>
                        <label> Edit Token </label>
                        <input type="text" class="input-line-token token_line ml-2" name="token_line" placeholder="Enter Token line" aria-label="Token line" />
                        <button class="button button-token token_line_btn">Submit</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card shadow rounded">
                <div class="card-header bg-secondary">
                    <strong class="t">Code Restart Machine</strong>
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <div class="card shadow rounded">
                <div class="card-header">
                    <span>
                        <p class="font-weight-bold"> Code (4 PIN) is : <?php echo $component->code;  ?></p>
                        <label> Edit Coed </label>
                        <input type="text" class="input-code code ml-2" name="code" placeholder="Enter Code" aria-label="code" maxlength="4"/>
                        <button class="button button-token code_btn">Submit</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>