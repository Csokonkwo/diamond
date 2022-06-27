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
    
    <div class="member_id">Member ID: <?php echo $_SESSION['id']; ?></div>
    
    <div class="totald">Inc: 
        <span>$<?php echo number_format($income, 2) ?></span>
    </div>
    
    <div class="totale"> <a href="interest.php">Exp: </a>
        <span>$<?php echo number_format($expenditure, 2) ?></span>
    </div>
    
</header>


<aside class="nav">
    <ul>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="profile.php"><i class="fa fa-user-edit"></i> My Profile</a></li>
        <li><a href="referrals.php"><i class="fa fa-users"></i> Referrals</a></li>
        <li><a href="earnings.php"><i class="fa fa-money"></i> Earnings</a></li>
        <li><a href="deposits.php"><i class="fa fa-money"></i> Deposits</a></li>
        <li><a href="investments.php"><i class="fa fa-money"></i> Investments</a></li>
        <li><a href="withdrawals.php"><i class="fa fa-money"></i> Withdrawals</a></li>
        <?php if($_SESSION['admin'] > 3): ?>
        <li><a href="../admin/index.php"><i class="fa fa-calendar"></i> Admin</a></li>
        <?php endif; ?>
        <li><a href="history.php"><i class="fa fa-calendar"></i> History</a></li>
        <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
</aside>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1215ef18-bffd-4617-9197-095e9a1d5667";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    
    <main>
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
        <?php endif ?>
        
        <div class="main_top">
            <i class="fa fa-home"></i><a href="<?php echo BASE_URL . '/index.php'?>">Home</a> <i class="fa fa-angle-right"></i> <?php echo $pageName; ?>
        </div>
