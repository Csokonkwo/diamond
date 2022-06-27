<div id="preloader" style="display: none">
    <div id="status" style="display: inherit">&nbsp; <span> Loading...</span></div>
    
  </div>

  <script src="<?php echo BASE_URL . '/js/load.js'?>"></script>
  <header class="sticky">
    <div id="toggle-sidebar" onclick="togglesidebar()">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div id="logo">
      <img src="<?php echo BASE_URL . '/img/logo.png'?>" />
    </div>

    <nav>
      <ul>
        <li class="nav-item active"> <a href="<?php echo BASE_URL . '/index.php'?>"><span>Home</span></a></li>
        <li class="nav-item"><span>About Us</span>

          <i class="fa fa-angle-down"></i>
          <ul class="dropdown">

            <li class=""><i class="">-</i><a href="<?php echo BASE_URL . '/about.php'?>">Overview</a></li>
            <li class=""><i class="">-</i><a href="<?php echo BASE_URL . '/morenews.php'?>">Recent News</a></li>
            <li class=""><i class="">-</i><a href="<?php echo BASE_URL . '/plans.php'?>">Investment Plans</a></li>
            <li class=""><i class="">-</i><a href="<?php echo BASE_URL . '/guide.php'?>">Investment Guides</a></li>
            <li class=""><i class="">-</i><a href="<?php echo BASE_URL . '/faqs.php'?>">Frequently Asked Questions</a></li>

          </ul>

          </div>

        </li>

        <li class="nav-item"><a href="<?php echo BASE_URL . '/offer.php'?>"><span>Services</span>
        </li>


        <li class="nav-item"> <a href="<?php echo BASE_URL . '/contact.php'?>"><span>Contact</span>


          </a></li>


        <li class="nav-item">
          <span>Account</span>

          <i class="fa fa-angle-down"></i>
          <ul class="dropdown">
            <li><a href="<?php echo BASE_URL . '/register/signup.php'?>">Register</a></li>
            <li><a href="<?php echo BASE_URL . '/register/signin.php'?>">Login</a></li>
          </ul>
        </li>


        <a><i class="fa fa-search search-btn inline-search"></i></a>

        <li> <a href="<?php echo BASE_URL . '/register/signin.php'?>" class="login">Login</a></li>
      </ul>
    </nav>

    <a><i class="fa fa-search search-btn"></i></a>
  </header>

  <div class="search-form">
      <form action="<?php echo BASE_URL . '/guide.php'?>" method="post">
          <input type="text" name="search_term"  placeholder="Search..." id="searcher">
      </form>
  </div>

  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="9a729054-4c1b-457a-a33e-f6b5ba899fbe";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>