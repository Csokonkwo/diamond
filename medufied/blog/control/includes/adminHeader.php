<header id="header" class="header">
    
<div class="logo"> Medufied</div>
    
    <label id="menu-btn" class="menu-btn" onclick="menuBtn()">
        <span></span>
        <span></span>
        <span></span>  
    </label>

    <nav id="nav-bar">

    <ul id="nav-li">
    <?php if (isset($_SESSION['id'])): ?>

        <li><a href="<?php echo BASE_URL . '/blog/index.php'?>">Public Section</a></li>
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul>
                <li><a href="<?php echo BASE_URL . '/blog/logout.php'?>" class="logout">logout</a></li>
            </ul>
        </li>
    <?php endif; ?>
    </ul>
    </nav>
</header>
<div class="under-header"></div>