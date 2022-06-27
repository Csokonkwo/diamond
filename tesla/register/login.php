<?php 

$pageName = 'Sign in';
include("../path.php");

require_once 'server.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<?php  include("head.php"); ?>

</head>

<body>
   
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
    
  
<main>

    <!-------------- Hero Section --------->
        
    <?php include(ROOT_PATH . "/includes/hero.php"); ?>

<div class="form">
           <div class="container">

                <form action="signin.php" method="POST" onSubmit="return validateForm(this)">
                    <h2>Member Login</h2>
                    
                    <?Php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?>.</li>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>

                    <div>
                        <i class="fa fa-user"></i>
                        <input id="l_user" type="text" name="user" placeholder="Username or Email" value="<?php echo $user; ?>" oninput="checkLength(this)">
                        <label id="l_user_2" for=""></label>
                    </div>

                    <div>
                        <i class="fa fa-lock"></i>
                        <input id = "pass" type="password" placeholder="Password" name="password" oninput="checkLength(this)">
                        <label id ="l_pass" for=""></label>
                    </div>

                    <div>
                        <button type="submit" name="log_in" class="btn"> Login</button>
                    </div>

                    <p class="">Not yet a member? <a href="signup.php">Sign up</a></p>
                    
                    <div style="font-size: 0.8em; text-align:center;"><a href="forgot_password.php"> forgot password?</a></div>

                </form>
           </div>
           
           <div class="right"></div>
       </div>

                    </main>


    <?php  include("../includes/footer.php"); ?>
       
</body>
</html>