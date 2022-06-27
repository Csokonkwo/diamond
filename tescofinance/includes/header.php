<header>

    <div class="topbar">
      <ul class="left">

        <a href="<?php echo BASE_URL . '/about/blog.php' ?>">Blog</a>
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="active">Home</a>
        <a href="<?php echo BASE_URL . '/about/index.php' ?>">About</a>
        <a href="<?php echo BASE_URL . '/contact.php' ?>">Contact</a>
        <a class="search-btn"><i class="fa fa-search"></i></a>
      </ul>

      <ul class="right">
        <a href="<?php echo BASE_URL . '/about/privacy.php' ?>">Privacy Policy</a>
        <a href="#">Europe</a>

      </ul>

    </div>

    <nav>


      <i class="fa fa-bars toggle-btn hide-mobile" onclick="toggleNav()"></i>
      <div class="logo">
        <img src="<?php echo BASE_URL . '/img/logo.jpg' ?>" alt="logo">
      </div>

      <ul class="nav-items">

        <li href="#">About<i class="fa fa-angle-down"></i>

          <ul class="dropdown">
            <a href="<?php echo BASE_URL . '/about/index.php' ?>">Overview</a>
            <a href="<?php echo BASE_URL . '/about/plans.php' ?>">Our Plans</a>
            <a href="<?php echo BASE_URL . '/about/guides.php' ?>">Financial Guides</a>
          </ul>

        </li>
        <li href="#">Account<i class="fa fa-angle-down"></i>

          <ul class="dropdown">
            <a href="<?php echo BASE_URL . '/register/signin.php' ?>">Sign In</a>
            <a href="<?php echo BASE_URL . '/register/signup.php' ?>">Sign Up</a>
          </ul>

        </li>

        <li> <a class="without" href="<?php echo BASE_URL . '/about/services.php'?>">Services </a>

          <ul class="dropdown">
          </ul>
        </li>

        <li> <a class="without" href="<?php echo BASE_URL . '/contact.php'?>">Contact </a>

          <ul class="dropdown">
          </ul>
        </li>

        <li> <a class="without" href="<?php echo BASE_URL . '/about/faqs.php'?>">FAQ's </a>

          <ul class="dropdown">
          </ul>
        </li>

        <li> <a class="without" href="<?php echo BASE_URL . '/about/sustain.php'?>">Sustainability </a>

          <ul class="dropdown">
          </ul>
        </li>

      </ul>
      
      <ul class="nav-right">
        <a href="<?php echo BASE_URL . '/register/signin.php' ?>" class="space-within-10 hide-desktop">Online Account</a>
        <a href="<?php echo BASE_URL . '/register/signin.php' ?>" class="space-within-10 hide-mobile">Login</a>

      </ul>
    </nav>


  </header>
  
  <div class="search-form">
      <form action="<?php echo BASE_URL . '/search.php'?>" method="post">
          <input type="text" name="search_term"  placeholder="Search..." id="searcher">
      </form>
  </div>
  <div class="search-cancel"><i class="fa fa-close" style="font-size:15px;"></i></div>
    