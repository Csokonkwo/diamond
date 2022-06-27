<header>
        <p>Hello, <?php echo $_SESSION['username']; ?> <a href="../app/profile.php"><img src="<?php echo BASE_URL. '/app/img/male.png' ?>"></a></p>
        
        <div class="balance">Admin 
        </div>
        
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    
    </header>
    
    <aside class="nav">
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="users.php"><i class="fa fa-user"></i> Users</a></li>
            <li><a href="deposit.php"><i class="fa fa-money"></i> Deposit</a></li>
            <li><a href="cashout.php"><i class="fa fa-dollar"></i> Cashout</a></li>
            <li><a href="invest.php"><i class="fa fa-money"></i> Invest</a></li>
            <li><a href="withdraw.php"><i class="fa fa-money"></i> Withdraw</a></li>
            <li><a href="addMoney.php"><i class="fa fa-user-plus"></i> Addmoney</a></li>
            <li><a href="send_email.php"><i class="fa fa-envelope"></i> Send email</a></li>
            <li><a href="../app/index.php?logout=1"><i class="fa fa-sign-out"></i> Sign out</a></li>
            <?php if($_SESSION['admin'] >= 3): ?>
            <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL. '/app/index.php' ?>">My Dashboard</a></li>
        </ul>
    </aside>