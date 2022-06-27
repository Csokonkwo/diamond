<header>
        <div class="clearfix">
            
            <div class="logo"><a href="../index.php"><img src="../img/logo.jpg"></a></div>
        
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <?php $user = selectOne('users', ['id' => $_SESSION['id']]); ?>
            <div class="profile_pics">
                <?php if(isset($user['image'])): ?>
                   <img src="img/img/<?php echo $user['image']?>">
                    <?php else: ?>
                    <img src="img/img/profile_pics.jpg">
                    <?php endif; ?>
            </div>
            
            <div class="profile_username">
                <span><?php echo $_SESSION['username']; ?>, $<?php echo number_format($balance, 2); ?></span>
                <span><?php $investor = selectOneDesc('transactionz', ['user_id' => $_SESSION['id'], 'type'=> 'investment']); if(isset($investor)): echo $investor['reference']; else: echo 'Pre'; endif; ?> Investor</span>
                
            </div>
            
            <a href=""><i class="fa fa-bell"></i></a>
            
        </div>
        
    </header>


<aside class="nav">
    <ul>
        <li><a href="profile.php"><i class="fa fa-user-edit"></i> My Profile</a></li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="deposits.php"><i class="fas fa-hand-holding-usd"></i> Deposits</a></li>
        <li><a href="investments.php"><i class="fas fa-piggy-bank"></i> Investments</a></li>
        <li><a href="history.php"><i class="fas fa-calendar"></i> History</a></li>
        <li><a href="earnings.php"><i class="fas fa-coins"></i> Earnings</a></li>
        <li><a href="referrals.php"><i class="fa fa-users"></i> Referrals</a></li>
        <li><a href="withdrawals.php"><i class="fa fa-money"></i> Withdrawals</a></li>
        <li><a href="transfers.php"><i class="fa fa-exchange"></i> Transfers</a></li>
        <?php if($_SESSION['admin']): if($_SESSION['admin'] > 3): ?>
        <li><a href="../admin/index.php"><i class="fa fa-calendar"></i> Admin</a></li>
        <?php endif; endif; ?>
        <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Log Out</a></li>
    </ul>
</aside>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '93ccfc2fa536ef1c7f1503f76320c590452e1355';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

 
    <main>
        <?php if(isset($_SESSION['message'])): ?>
            <div id="log" class="alert <?php echo $_SESSION['alert-class'];?> ">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
        <?php endif ?>
