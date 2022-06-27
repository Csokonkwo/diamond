<header>
    <div  class="clearfix">
            <div class="logo"><a href="../index.php"><img src="../img/logo.png"></a></div>

            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <label> Hello, <?php echo $_SESSION['username']; ?></label>

            <div class="profile"><a href="profile.php"><img src="../app/img/male.png"></a></div>
        </div>
        
        <div class="balance">Admin</div>
        
        <div class="totald">Pending Deposits
            <span> $<?php $pendingDeposits = pendingDeposits('deposit', 'pending'); echo $pendingDeposits; ?> </span>
        </div>
        
        <div class="totale">Pending Cashouts
            <span>$<?php $pendingCashouts = pendingDeposits('cashout', 'pending'); echo $pendingCashouts; ?> </span>
        </div>
        
    </header>
    
    <aside>
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="users.php"><i class="fa fa-user"></i> Users</a></li>
            <li><a href="deposit.php"><i class="fa fa-money"></i> Deposit</a></li>
            <li><a href="cashout.php"><i class="fa fa-dollar"></i> Cashout</a></li>
            <li><a href="invest.php"><i class="fa fa-money"></i> Invest</a></li>
            <li><a href="addMoney.php"><i class="fa fa-user-plus"></i> Addmoney</a></li>
            <li><a href="send_email.php"><i class="fa fa-envelope"></i> Send email</a></li>
            <li><a href="../app/index.php?logout=1"><i class="fa fa-sign-out"></i> Sign out</a></li>
            <li><a href="<?php echo BASE_URL. '/app/index.php' ?>">My Dashboard</a></li>
        </ul>

    </aside>