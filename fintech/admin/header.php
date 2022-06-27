<header>     
        <h1 class="logo">Fintech </h1>

        <div class="logout"><a href="<?php echo BASE_URL.'/index.php?logout=1'?>"><i class="fa fa-power-off" style="font-size: 20px;"></i> log</a></div> 

        <div class="username">
            <?php echo $pageName; ?> <span><i class="fa fa-bell"></i></span>
        </div>

        <label class="menu-btn" id="menu-btn">
            <span id="menu-btn1"></span>
            <span id="menu-btn2"></span>
            <span id="menu-btn3"></span>
        </label>           
            
    </header>
    
    <aside>
        <p> <?php echo $_SESSION['username']; ?>
        <span><?php echo $_SESSION['email']; ?></span>
        </p>
        <ul>
            <li><a href="<?php echo BASE_URL. '/index.php' ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo BASE_URL. '/app/index.php' ?>"><i class="fa fa-dashboard"></i>My Dashboard</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>"><i class="fa fa-dashboard"></i>Admin Dashboard</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/addPost.php' ?>"><i class="fa fa-user-circle-o"></i>  Add Post</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/transactions.php' ?>"><i class="fa fa-money"></i> Transactions</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/users.php' ?>"><i class="fa fa-user-plus"></i> Users</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/deposits.php' ?>"><i class="fa fa-money"></i> Deposits</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/cashouts.php' ?>"><i class="fa fa-bitcoin"></i> Cashouts</a></li>
            <li><a href="<?php echo BASE_URL. '/admin/investments.php' ?>"><i class="fa fa-bitcoin"></i> Investments</a></li>
            
            
            <li><a href="<?php echo BASE_URL.'/index.php?logout=1'?>"><i class="fa fa-power-off" style="color: red; font-size: 18px;"></i> Sign out</a></li>
            
        </ul>
    
    </aside>
