<footer>
        <div class="container">
            <div class="box one">
                <h2> <?php echo $companyName; ?></h2>
                <p>
                <?php echo $companyName;?> provides you an opportunity to convert your dreams into reality.<br><br>

                Our 24/7 online customer support, our reliable and easy accessible web interface have made customer services better. We inspire confidence in finance. Stay with us. </p>
                <a href="<?php echo BASE_URL . '/about.php'?>">READ MORE</a>
                </p>
            </div>
            
            <div class="box two">
                <h2>Data Protection</h2>
                <p>
                    All personal data which you provide the company are stored in an environment of strict confidentiality and are protected by the Law on protection of personal data.
                </p>
            </div>
            
            <div class="box three">
                <h2>Quick Links</h2>
                <div class="content">
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/about/faqs.php'?>"><i class="fas fa-angle-double-right"></i> Faqs</a></li>
                        <li><a href="<?php echo BASE_URL . '/register/signup.php'?>"><i class="fas fa-angle-double-right"></i> Register</a></li>
                        <li><a href="<?php echo BASE_URL . '/register/signin.php'?>"><i class="fas fa-angle-double-right"></i> Login</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/terms.php'?>"><i class="fas fa-angle-double-right"></i> Our Terms</a></li>
                        <li><a href="<?php echo BASE_URL . '/about/privacy.php'?>"><i class="fas fa-angle-double-right"></i> Privacy Policy</a></li>
                    </ul>
                    
                    <ul>
                        <li><a href="<?php echo BASE_URL . '/security/anti_fraud.php' ?>"><i class="fas fa-angle-double-right"></i> Anti-fraud</a></li>
                        <li><a href="<?php echo BASE_URL . '/security/tips.php' ?>"><i class="fas fa-angle-double-right"></i> Security Tips</a></li>
                        <li><a href="<?php echo BASE_URL . '/security/code.php' ?>"><i class="fas fa-angle-double-right"></i> Secure Code</a></li>

                    </ul>
                    
                </div>
            </div>
            
            <div class="box four">
                <h2>Contact Us</h2>
                <p>
                    <!--<a style="display: inline;" href="https://wa.me/+447451278377"><i style="color:white" class="fa fa-whatsapp"></i> </a> <a style="display: inline;" href="https://t.me/"><i style="color:white" class="fa fa-telegram"></i> </a>
                    
                    <a href=""><i class="fas fa-phone-alt"></i> +xczcdcsdcec</a> -->
                    
                    <a href="mailto:support@amcorassets.com"><i class="fas fa-envelope"></i> support@<?php echo $companyEmail; ?>.com</a>
                    <a href=""><i class="fas fa-map-marker-alt"></i> Head Office: <?php echo $companyLocation; ?>  </a>
                    
                    <a id="google_translate_element"></a>

                    <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
                    </script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                
                </p>
            </div>
            
        </div>
        
        <div class="bottom">
            Copyright &copy; 2021  <?php echo $companyName; ?>. All rights reserved.
        </div>
    
    </footer>

    
    <script src="js/scroll-out.js"></script>
    <script> ScrollOut({
            targets: ".about-content, .about-image"
        }) </script>

    <script src="<?php echo BASE_URL.'/js/ajax.js' ?> "></script>
    <script src="<?php echo BASE_URL.'/js/calculator.js' ?> "></script>
    <script src="<?php echo BASE_URL. '/js/main.js'?>"></script>
    <script src="<?php echo BASE_URL.'/js/load.js' ?> "></script>
    <script src="<?php echo BASE_URL. '/js/toggle.js'?>"></script>
    <script src="<?php echo BASE_URL. '/js/carousel.js' ?>"></script>
    
    <script src="<?php echo BASE_URL . '/js/validate.js'?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL . '/js/sub.js'?>"></script>