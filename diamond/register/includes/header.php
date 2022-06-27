<header class="">
      <a class="logo" href="<?php echo BASE_URL . '/index.php' ?>">
        <img src="<?php echo BASE_URL . '/img/logo.png' ?>" alt="" />
      </a>
      <div class="nav-header-flex">
        <a class="item" href="<?php echo BASE_URL . '/register/signin.php' ?>">
          <i class="fa fa-lock nav-bar"></i>
          <span>Login</span>
        </a>
        <a class="item" href="<?php echo BASE_URL . '/contact.php' ?>">
          <i class="fa fa-phone nav-bar"></i>
          <span>Contact</span>
        </a>
        <div class="item">
          <i class="fa fa-bars nav-bar" onclick="toggleBar()"></i>
          <span>Menu</span>
        </div>
      </div>
      <nav>
        <ul>
          <li> <a href="<?php echo BASE_URL . '/index.php' ?>">Home </a> <i class="fa fa-angle-right"></i></li>
          <li href="#">
            About Us
            <div class="dropdown">
              <ul>
                <li><a href="<?php echo BASE_URL . '/about/index.php' ?>">Overview</a></li>
                <li><a href="<?php echo BASE_URL . '/about/services.php' ?>">Our Services</a></li>
                <li><a href="<?php echo BASE_URL . '/about/plans.php' ?>">Investment Plans</a></li>
                <li><a href="<?php echo BASE_URL . '/about/guides.php' ?>">Investment Guides</a></li>
              </ul>
            </div>
            <i class="fa fa-angle-right"></i>
          </li>
          <li><a href="<?php echo BASE_URL . '/about/faqs.php' ?>">Faqs</a></li>
          <li><a href="<?php echo BASE_URL . '/about/sustain.php' ?>">Sustainability</a></li>
          <li><a class="blog" href="<?php echo BASE_URL . '/about/blog.php' ?>">Blog</a></li>
          <li><a href="<?php echo BASE_URL . '/contact.php' ?>">Contact</a></li>

          <li href="#">
            Account
            <div class="dropdown">
              <ul>
                <li><a href="<?php echo BASE_URL . '/register/signin.php' ?>">Login</a></li>
                <li><a href="<?php echo BASE_URL . '/register/signup.php' ?>">Register</a></li>
              </ul>
            </div>
            <i class="fa fa-angle-right"></i>
          </li>
        </ul>
      </nav>
    </header>

    
    <!-- preloader -->
    <div class="preloader">
        <div class="loader">
            <img src="<?php echo BASE_URL . '/img/loader.svg' ?>" />
        </div>
    </div>