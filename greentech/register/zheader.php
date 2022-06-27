<header>     
    <h1 class="logo">Greentech </h1>
    
    <div class="logout"><a href="index.php?logout=1"><i class="fa fa-power-off" style="color: red; font-size: 20px;"></i> </a></div> 
    
    <div class="username">
        <li><i class=" fa fa-user"></i> <?php echo $_SESSION['username'];?> </li>
    </div>
    
    <label class="menu-btn" id="menu-btn">
        <span id="menu-btn1"></span>
        <span id="menu-btn2"></span>
        <span id="menu-btn3"></span>
    </label>           
            
</header>
    
<div class="all clearfix">
    <div class="aside">
        <label class="logo-btn">Greentech <span class="sub-menu-btn">X</span></label>

        <ul>
            <li><a href="../index.php"><i class="fa fa-home"></i> Home </a></li>
            <li><a href="index.php"> <i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li><a href="zprofile.php"> <i class="fa fa-user-circle-o"></i> Profile </a></li>
            <li><a href="zreferrals.php"> <i class="fa fa-user-plus"></i> Referrals </a></li>
            <li><a href="zdeposit.php"> <i class="fa fa-money"></i> Deposit funds</a></li>
            <li><a href="zwithdraw.php"> <i class="fa fa-bitcoin"></i> Cashout funds</a></li>
            <li><a href="ztransaction.php"> <i class="fa fa-history"></i> Transaction History</a></li>
            <li><a href="zcurrency.php"> <i class="fa fa-exchange"></i> Currency Exchange</a></li>
            <li> <a href="https://wa.me/message/7NL5SVDFUAXLL1"> <i class="fa fa-comments"></i> Consult us</a></li>
            <li><a href="index.php?logout=1"><i class="fa fa-power-off" style="color: red; font-size: 18px;"></i> Sign Out</a></li>
        </ul>

</div>