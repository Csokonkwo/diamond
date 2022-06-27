<header>
        <p>Hello, <?php echo $_SESSION['username']; ?> <a href="profile.php"><img src="<?php echo BASE_URL. '/app/img/male.png' ?>"></a></p>
        
        <div class="balance">$<?php echo  $balance; ?>
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
            <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="deposit.php"><i class="fa fa-money"></i> Deposit</a></li>
            <li><a href="cashout.php"><i class="fa fa-dollar"></i> Cashout</a></li>
            <li><a href="invest.php"><i class="fa fa-money"></i> Invest</a></li>
            <li><a href="history.php"><i class="fa fa-history"></i> History</a></li>
            <li><a href="referrals.php"><i class="fa fa-user-plus"></i> Referrals</a></li>
            <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Sign out</a></li>
            <?php if($_SESSION['admin'] >= 3): ?>
            <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a></li>
            <?php endif; ?>
        </ul>
    </aside>

    