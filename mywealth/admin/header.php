<header>
    <div  class="clearfix">
            <div class="logo"><a href="../index.php"><img src="../img/logo.png"></a></div>

            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <label> Hello, <?php echo $_SESSION['username']; ?></label>

            <div class="profile"><a href="../app/profile.php"><img src="../app/img/male.png"></a></div>
        </div>
         
        <div class="balance"><a href="users.php"><i class="fa fa-user"></i> Users</a></div>
        
        <div class="totald">Pending Deposits
            <span> $<?php $pendingDeposits = pendingDeposits('deposit', 'pending'); echo $pendingDeposits; ?> </span>
        </div>
        
        <div class="totale">Pending Withdrawals
            <span>$<?php $pendingCashouts = pendingDeposits('withdraw', 'pending'); echo $pendingCashouts; ?> </span>
        </div>
        
    </header>
    
    <aside>
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i> History</a></li>
            <li><a href="deposit.php"><i class="fa fa-money"></i> Deposits</a></li>
            <li><a href="withdraw.php"><i class="fa fa-dollar"></i> Withdrawals</a></li>
            <li><a href="invest.php"><i class="fa fa-money"></i> Investments</a></li>
            <li><a href="transfers.php"><i class="fa fa-money"></i>Transfers</a></li>
            <li><a href="news.php"><i class="fa fa-money"></i> News</a></li>
            <li><a href="info.php"> &nbsp Update info</a></li>
            <li><a href="testimonials.php"><i class="fa fa-user-plus"></i> Testimonials</a></li>
            <li><a href="<?php echo BASE_URL. '/app/index.php' ?>?logout=1"><i class="fa fa-sign-out"></i> Sign out</a></li>
            <li><a href="<?php echo BASE_URL. '/app/index.php' ?>"><i class="fa fa-user"></i> App</a></li>
        </ul>

    </aside>