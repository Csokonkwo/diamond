<?Php 
$notifi = selectOne('notification', ['user_idd' => $_SESSION['id'], 'isRead' => '0']);
if(isset($notifi)){
    $notiColor = 'red';
}


?>

<header>     
        <h1 class="logo">Fintech </h1>

        <div class="logout"><a href="<?php echo BASE_URL.'/index.php?logout=1'?>"><i class="fa fa-power-off" style="font-size: 20px;"></i> log</a></div> 

        <div class="username">
            <?php echo $pageName; ?> <span><a href="notification.php?noti=1"><i style="color:<?php echo $notiColor?>" class="fa fa-bell"></i></a></span></i></span>
        </div>

        <label class="menu-btn" id="menu-btn">
            <span id="menu-btn1"></span>
            <span id="menu-btn2"></span>
            <span id="menu-btn3"></span>
        </label>           
            
    </header>
    
    <aside>
        <p> <?php echo $_SESSION['username']; ?>
        <span><?php echo $_SESSION['email']; ?></span>
        </p>
        <ul>
            <li><a href="<?php echo BASE_URL. '/index.php' ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo BASE_URL. '/app/index.php' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo BASE_URL. '/app/profile.php' ?>"><i class="fa fa-user-circle-o"></i> Profile</a></li>
            <li><a href="<?php echo BASE_URL. '/app/invest.php' ?>"><i class="fa fa-money"></i> Invest</a></li>
            <li><a href="<?php echo BASE_URL. '/app/referral.php' ?>"><i class="fa fa-user-plus"></i> Referrals</a></li>
            <li><a href="<?php echo BASE_URL. '/app/deposit.php' ?>"><i class="fa fa-money"></i> Deposit</a></li>
            <li><a href="<?php echo BASE_URL. '/app/cashout.php' ?>"><i class="fa fa-bitcoin"></i> Cashout</a></li>
            <li><a><i class="fa fa-history"></i> Currency Exchange</a></li>
            <li><a href="https://wa.me/13478993600"><i class="fa fa-exchange"></i> Consult us</a></li>
            <li><a href="<?php echo BASE_URL.'/index.php?logout=1'?>"><i class="fa fa-power-off" style="color: red; font-size: 18px;"></i> Sign out</a></li>
            <?php if($_SESSION['admin'] > 1): ?>
            <li><a href="<?php echo BASE_URL. '/admin/index.php' ?>"><i class="fa fa-dashboard"></i> Admin Dashboard</a></li>
            <?php endif; ?>
        </ul>
    
    </aside>
