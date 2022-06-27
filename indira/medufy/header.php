<?php

//THIS CODINGS LOGS THE USER OUT

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    unset($_SESSION['referrer_id']);
    header('location: index.php');

    exit();
}


?>
<header>
        <label class="logo">Medufied</label>
        
        <ul class="nav">
            <?php if(!isset($_SESSION['id'])):?>
            <li class="btn signup"><a href="<?php echo BASE_URL.'/register/signup.php'?>">Sign up</a></li>
            <li class="btn signin"><a href="<?php echo BASE_URL.'/register/signin.php'?>">Sign in</a></li>
            
            <?php else:?>
            <li class="btn signup"><a><i class="fa fa-user"></i> <?php echo $_SESSION['username']?></a></li>
                <?php if($_SESSION['admin'] >= 1):?>
                <li class="btn signup"><a href="<?php echo BASE_URL.'/blog/admin/index.php'?>"> Admin</a></li>
                <?php endif; ?>
            <li><a href="<?php echo BASE_URL.'/index.php?logout=1'?>"><i class='fa fa-power-off'></i></a></li>
            <?php endif; ?>

            <li><a href="<?php echo BASE_URL.'/index.php'?>"><i class='fas fa-home'></i> Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
            <li><a href="<?php echo BASE_URL.'/blog/index.php'?>"><i class='fas fa-blog'></i> General</a></li>
            
        </ul>
        
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div class="sub-menu-btn">
            <span></span>
            <span></span>
        </div>
        
    </header>  