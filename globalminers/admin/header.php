<header>
    <img src="../img/logo.png">
    <a href="../app/index.php?logout=1"><i class="fa fa-sign-out"></i></a>
    
    <label class="menu-btn" id="menu-btn">
    <span id="menu-btn1"></span>
    <span id="menu-btn2"></span>
    <span id="menu-btn3"></span>
</label>  
</header>

<aside>
    <div class="aside-header">
        <img src="../app/img/male.png">
        <p>Welcome,
            <span><?php echo $_SESSION['username'] ?> <i class="fa fa-caret-down"></i></span>
        </p>
    </div>
    <ul>
        <li><a href="<?php echo BASE_URL. '/index.php' ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo BASE_URL. '/app/index.php' ?>"><i class="fa fa-dashboard"></i>My Dashboard</a></li>
        <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>"><i class="fa fa-dashboard"></i>Admin Dashboard</a></li>
        <li><a href="<?php echo BASE_URL. '/admin/addMoney.php' ?>"><i class="fa fa-bitcoin"></i> Add money</a></li>
        <li><a href="<?php echo BASE_URL. '/admin/users.php' ?>"><i class="fa fa-user-plus"></i> Users</a></li>
        <li><a href="<?php echo BASE_URL. '/admin/deposits.php' ?>"><i class="fa fa-money"></i> Deposits</a></li>
        <li><a href="<?php echo BASE_URL. '/admin/cashouts.php' ?>"><i class="fa fa-bitcoin"></i> Cashouts</a></li>
        <li><a href="<?php echo BASE_URL. '/admin/investments.php' ?>"><i class="fa fa-bitcoin"></i> Investments</a></li>
        
        
        <li><a href="<?php echo BASE_URL.'../app/index.php?logout=1'?>"><i class="fa fa-power-off" style="color: red; font-size: 18px;"></i> Sign out</a></li>
            
    </ul>
    
</aside>

<main>
            <div class="main-top clearfix">
                <p><?php echo $pageName ?></p>
                <div class="right clearfix">
                </div>
            </div>