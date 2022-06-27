<header>
    <img src="img/logo.png">
    <a href="index.php?logout=1"><i class="fa fa-sign-out"></i></a>
    
    <label class="menu-btn" id="menu-btn">
    <span id="menu-btn1"></span>
    <span id="menu-btn2"></span>
    <span id="menu-btn3"></span>
</label>  
</header>

<aside>
    <div class="aside-header">
        <img src="img/male.png">
        <p>Welcome,
            <span><?php echo $_SESSION['username'] ?> <i class="fa fa-caret-down"></i></span>
        </p>
    </div>
    <ul>
        <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="invest.php"><i class="fa fa-money"></i> Invest</a></li>
        <li><a href="deposits.php"><i class="fa fa-money"></i> Deposits</a></li>
        <li><a href="cashouts.php"><i class="fa fa-dollar"></i> Cashouts</a></li>
        <li><a href="history.php"><i class="fa fa-history"></i> History</a></li>
        <li><a href="referral.php"><i class="fa fa-user-plus"></i> Referrals</a> </li>
        <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Logout </a></li>
        <?php if($_SESSION['admin'] >=1): ?>
            <li><a href="../admin/index.php"><i class="fa fa-history"></i> Admin</a></li>
        <?php endif; ?>
    </ul>
    
</aside>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="454e92dd-c2a8-4ddf-b150-a94a7214c044";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<main>
            <div class="main-top clearfix">
                <p><?php echo $pageName ?></p>
                <div class="right clearfix">
                    <div class="bal">
                        TOTAL BALANCE <span>$<?php echo $balance; ?></span>
                    </div>
                    <div class="cash">
                        TOTAL CASHOUTS <span>$<?php echo $confirmedCashouts; ?></span>
                    </div>
                </div>
            </div>