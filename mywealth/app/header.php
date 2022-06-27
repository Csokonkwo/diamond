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
        
        <div class="totald">Total Investments 
            <span>$<?php echo $confirmedinvestments ?></span>
        </div>
        
        <div class="totale">Total Profits
            <span>$<?php echo $confirmedInterests ?></span>
        </div>
        
    </header>
    
    <aside class="nav">
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="deposit.php"><i class="fa fa-money"></i> Deposit</a></li>
            <li><a href="withdraw.php"><i class="fa fa-dollar"></i> Withdraw</a></li>
            <li><a href="invest.php"><i class="fa fa-money"></i> Invest</a></li>
            <li><a href="interest.php"><i class="fa fa-money"></i> Earnings</a></li>
            <?php if($_SESSION['admin'] >= 5): ?>
            <li><a href="transfer.php"><i class="fa fa-history"></i>Transfer</a></li>
            <?php endif; ?>
            <li><a href="history.php"><i class="fa fa-calendar"></i> History</a></li>
            <li><a href="referrals.php"><i class="fas fa-users"></i> Referrals</a></li>
            <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Sign out</a></li>
            <?php if($_SESSION['admin'] >= 3): ?>
            <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>">Admin</a></li>
            <?php endif; ?>
            
        </ul>
    </aside>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/603391909c4f165d47c5c627/1ev4n181l';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->