<header id="header" class="header">               
                
    <div class="logo"> Medufied</div>
    
    <label id="menu-btn" class="menu-btn" onclick="menuBtn()">
        <span></span>
        <span></span>
        <span></span>  
    </label>

    <label><i class='fa fa-search'></i></label>

</header>
        
    <nav id="nav-bar">
                
        <ul id="nav-li">
            <li><a href="<?php echo BASE_URL . '/index.php' ?>"> Home </a></li>
            <li><a href="<?php echo BASE_URL . '/about.php' ?>"> About</a></li>
            <li><a href="<?php echo BASE_URL . '/blog/index.php' ?>"><i class="fas fa-blog"></i> Blog </a></li>
            <?php if(isset($_SESSION['id'])): ?> 
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul>
                    <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/blog/admin/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif ?>
                    <li><a href="<?php echo BASE_URL . '/blog/logout.php' ?>" class="logout">logout</a></li>
                </ul>
            </li>  
            <?php else: ?> 
            <li><a href="<?php echo BASE_URL . '/blog/register.php' ?>">Sign up</a></li>
            <li><a href="<?php echo BASE_URL . '/blog/login.php' ?>">
                    <i class="fa fa-user"></i> Sign in 
                </a> 
            </li> 
            <?php endif; ?> 
        </ul>
    </nav>
            
