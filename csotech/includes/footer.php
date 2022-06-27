    
    <div class="footer">
            <div class="footer-content">
                <div class="footer-section footer-about">
                    <h1 class="logo-text">Csotech</h1>
                    <p>
                        We are available 24/7. We love to create, design, manage and interact. We are committed to give you the best of whatever you want. Reach us through any of our contact links below.
                    </p>
                    <div class="footer-contact">
                        <span>
                            <i class="fa fa-phone-alt"> &nbsp;
                            +234 806 561 9176 
                            </i>
                        </span>
                        <span><i class="fa fa-envelope">&nbsp; support@csotech.com.ng</i></span>
                    </div>
                    <div class="socials">
                        <a href="https://facebook.com/csotechofficial" id="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://wa.me/+2348065619176" id="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://twitter.com/csotech" id="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://linkedin.com/csotech" id="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="https://instagram.com/csotech" id="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <br>
                    <ul>
                        <a href="index.php">
                            <li>Home</li>
                        </a>
                        <a href="https://blog.csotech.com.ng">
                            <li>Our Blog</li>
                        </a>
                        <a href="about.php">
                            <li>About us</li>
                        </a>

                        <?php if(isset($_SESSION['id'])): ?>
                        <a href="index.php?logout=1">
                            <li>Logout</li>
                        </a>
                            <?php if($_SESSION['admin'] >= 1): ?>
                            <a href="admin/index.php">
                                <li>Admin</li>
                            </a>
                            <?php endif;?>
                        <?php else:?>
                        <a href="admin/register/signin.php">
                            <li>Sign in</li>
                        </a>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="footer-section contact-form">
                    <h2>Contact us</h2>
                    <br>
                    <form onsubmit="return sendMessage()" id="message-form" >
                        <div id="message-response"></div>
                        <input type="email" class="text-input contact-input" id="message-email" placeholder="Your email" required>

                        <textarea rows="4" class="text-input contact-input" placeholder="Your message..." id="message-message" name="message" required></textarea>

                        <button type="submit" class="btn btn-big contact-btn">
                        <i class="fa fa-envelope"> </i>
                            Send
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
               Copyright &copy; Csotech Nig Ltd, All rights reserved.
            </div>
        </div>


    
    
    <script src="js/main.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/scroll-out.js"></script>
    <script src="js/ajax.js"></script>
    <script> ScrollOut({
            targets: ".aboutleft, #about-image"
        }) </script>
    
    <!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/sub.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/carousel.js"></script>

        <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe6f1f4df060f156a902c7e/1eqf229go';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->