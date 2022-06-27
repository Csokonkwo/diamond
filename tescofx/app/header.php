<header>
        <div  class="clearfix">
            <div class="logo"><a href="../index.php"><img src="../img/logo.png"></a></div>

            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <label> Hello, <?php echo $_SESSION['username']; ?></label>

            <div class="profile"><a href="profile.php"><img src="img/male.png"></a></div>
        </div>
        
        <div class="balance">$<?php echo $balance ?></div>
        
        <div class="totald">Total deposits 
            <span>$<?php echo $confirmedDeposits ?></span>
        </div>
        
        <div class="totale">Total Earnings
            <span>$<?php echo $confirmedInterests ?></span>
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


    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="236582fb-cfc6-4f1d-a86b-2a939f9a770b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>