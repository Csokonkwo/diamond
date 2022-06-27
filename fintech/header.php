<?php

session_start();

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
        
        <h1 class="logo">Fintech </h1> 

        <nav id="nav-bar">
           
            <ul class="nav">
                <li id="home"><a href="<?php echo BASE_URL. '/index.php' ?>">Home</a></li>
                <li><a href="<?php echo BASE_URL. '/index.php#news' ?>">News</a></li>
                <li><a href="<?php echo BASE_URL. '/terms.php' ?>">Terms</a></li>
                <li><a href="<?php echo BASE_URL. '/about.php' ?>">About us</a></li>
                
                <?Php if(!isset($_SESSION['id'])): ?>
                <li>
                    <a href="<?php echo BASE_URL. '/register/signin.php' ?>">
                    <i class="fa fa-user"></i> Sign in
                    </a>
                </li>
                <li><a href="<?php echo BASE_URL. '/register/signup.php' ?>">Sign up</a></li>
                <?Php else: ?>
                <li><a href="<?php echo BASE_URL. '/app/index.php' ?>">Dashboard</a></li>
                <li><a href="<?php echo BASE_URL.'/index.php?logout=1'?>">Logout</a></li>
                <?Php endif; ?>
            </ul>
        </nav>
        
        <label><i class=" fa fa-user"></i></label>
        <label class="menu-btn" id="menu-btn">
            <span id="menu-btn1"></span>
            <span id="menu-btn2"></span>
            <span id="menu-btn3"></span>
        </label>           
            
    </header>
    <div class="under-header"></div>