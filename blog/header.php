<header>
        <label class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </label>
        
        <img id="logo" src="<?php echo BASE_URL. '/img/cso.png' ?>" alt="">
        <div class="header-search">
            <i id="header-search" class="fa fa-search"></i>
            <form action="index.php" method="post" id="header-form">
                <input type="text" name="search_term"  placeholder="Search...">
            </form>
        </div>
        
        <div class="nav">
            <ul>
                <li><a href="<?php echo BASE_URL. '/index.php' ?>">Home</a></li>
                <?php foreach ($topics as $key => $topic): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' .$topic['name']; ?>"><?php echo $topic['name']; ?> </a></li>
                <?php endforeach; ?>
                <?php if(isset($_SESSION['id'])):?>
                <li><a href="index.php?logout=1">Logout</a></li>
                <?php if($_SESSION['admin'] > 1):?>
                <li><a href="admin/index.php">Admin</a></li>
                <?php endif;?>
                <?php else:?>
                <li><a href="<?php echo BASE_URL . '/register/signin.php'?>">sign in</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </header>
    
    <div class="under-heade"></div>
    
    <aside>
        <div>
            <img src="<?php echo BASE_URL. '/img/cso.png' ?>" alt="">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php foreach ($topics as $key => $topic): ?>
                <li><a href="<?php echo BASE_URL . '/blog/index.php?t_id=' . $topic['id'] . '&name=' .$topic['name']; ?>"><?php echo $topic['name']; ?> </a></li>
            <?php endforeach; ?>
            <?php if(isset($_SESSION['id'])):?>
            <li><a href="index.php?logout=1">Logout</a></li>
            <?php else:?>
            <li><a href="admin/index.php">sign in</a></li>
            <?php endif; ?>
        </ul>
        <label class="sub-menu-btn">
            <span></span>
            <span></span>
        </label>
    </aside>