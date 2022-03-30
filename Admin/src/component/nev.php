<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand badge">Project Value-Added</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link btn_home_menu" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn_member_menu" href="member.php">Member</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn_product_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="product.php">Product lists</a>
                    <a class="dropdown-item" href="size_product.php">Size of product</a>
                    <a class="dropdown-item" href="type_product.php">Type of product</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn_product_menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reward</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="reward_ex_list.php">Reward List</a>
                    <a class="dropdown-item" href="reward.php">Reward Item</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link btn_setting_menu" href="setting.php">LineNotifly</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-right">
            <li class="nav-item">
                <a class="nav-link btn_setting_menu" href="./src/models/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>