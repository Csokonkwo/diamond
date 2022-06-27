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
    
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '93ccfc2fa536ef1c7f1503f76320c590452e1355';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>


    
    <!-- preloader -->
    <div class="preloader">
        <div class="loader">
            <img src="<?php echo BASE_URL . '/img/loader.svg' ?>" />
        </div>
    </div>