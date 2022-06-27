<header>
    <div  class="clearfix">
        <div class="logo"><a href="../index.php"><img src="../img/logo.jpg"></a></div>

        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <label> Welcome, <?php echo $_SESSION['username']; ?></label>

        <div class="profile"><a href=""><img src="img/male.png"></a></div>
    </div>
    
    <div class="member_id">User_ID.  <?php echo $_SESSION['id']; ?></div>
    
    <div class="totald">Balance
        <span>$<?php echo $portfolio ?></span>
    </div>
    
    <div class="totale"> <a href="interest.php">Available </a>
        <span>$<?php echo $balance ?></span>
    </div>
    
</header>


<aside class="nav">
    <ul>
        <li><a href="profile.php"><i class="fa fa-user-edit"></i> My Profile</a></li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="deposits.php"><i class="fas fa-hand-holding-usd"></i> Deposits</a></li>
        <li><a href="investments.php"><i class="fas fa-piggy-bank"></i> Investments</a></li>
        <li><a href="earnings.php"><i class="fas fa-coins"></i> Earnings</a></li>
        <li><a href="referrals.php"><i class="fa fa-users"></i> Referrals</a></li>
        <li><a href="withdrawals.php"><i class="fa fa-money"></i> Withdrawals</a></li>
        <li><a href="transfers.php"><i class="fa fa-exchange"></i> Transfers</a></li>
        <li><a href="shares.php"><i class="fas fa-chart-line"></i> Shares</a></li>
        <?php if($_SESSION['admin']): if($_SESSION['admin'] > 3): ?>
        <li><a href="../admin/index.php"><i class="fa fa-calendar"></i> Admin</a></li>
        <?php endif; endif; ?>
        <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Log Out</a></li>
    </ul>
</aside>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b9731a9e-ed63-4159-bf90-cdbf8be28cc9";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
 
    <main class="fine-dashboard">
        <?php if(isset($_SESSION['message'])): ?>
            <div id="log" class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
        <?php endif ?>
