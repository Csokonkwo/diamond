 
       <div class="footer">
            <div class="footer-content">
                <div class="footer-section footer-about">
                    <h1 class="logo-text"><?php echo $companyName; ?></h1>
                    <p>
                        Our 247 online customer support, our reliable and easy accessible web interface have made customer services better. We inspire confidence in finance. Stay with us.
                    </p>
                    <div class="footer-contact">
                        <span>
                            <i class="fa fa-phone-alt"> &nbsp;
                            +1 347 899 3600
                            </i>
                        </span>
                        <span><i class="fa fa-envelope">&nbsp; support@greentech.com</i></span>
                    </div>
                    <div class="socials">
                        <a href="#" id="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://wa.me/+13478993600" id="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://twitter.com/green_techGroup" id="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://linkedin.com/greentech" id="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <br>
                    <ul>
                        <a href="#">
                            <li>Home</li>
                        </a>
                        <a href="#">
                            <li>News</li>
                        </a>
                        <a href="terms.php">
                            <li>Terms</li>
                        </a>
                        <a href="register/signup.php">
                            <li>Sign up</li>
                        </a>

                    </ul>
                </div>
                <div class="footer-section contact-form">
                    <h2>Contact us</h2>
                    <br>
                    <form onsubmit="return sendMessage()" id="message-form" >
                        <div id="message-response"></div>
                        <input type="email" class="text-input contact-input" id="message-email" placeholder="Your email" required>

                        <textarea rows="7" class="text-input contact-input" placeholder="Your message..." id="message-message" name="message" required></textarea>

                        <button type="submit" class="btn btn-big contact-btn">
                        <i class="fa fa-envelope"> </i>
                            Send
                        </button>
                    </form>
                </div>
            </div>
           <div class="under-footer"></div>
            <div class="footer-bottom">
            &copy; 2020 <?php echo $companyName; ?>, All rights reserved.
            </div>
        </div>

        </main>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/main.js"></script>