<footer>
    <div class="footer-con">
        <div class="box">
            <h2>Contact</h2>
            <p>
                <i class='fas fa-map-marker-alt'></i> Enugu, Nigeria<br>
                <i class='fas fa-phone-alt'></i> +234 806 561 9176 <br>
                <i class='fas fa-envelope'></i> Support@csotech.com.ng

            </p>
        </div>

        <div class="box">
            <h2>Quick links</h2>
            <p>      
                <li> <i class='fas fa-home'></i> <a href="<?php echo BASE_URL . '/index.php'; ?>">Home</a></li>

                <li>  <i class='fas fa-blog'></i> <a href="<?php echo BASE_URL . '/blog/index.php'; ?>">General</a></li>

                <li> <i class='fas fa-folder-open'></i> <a href="<?php echo BASE_URL . '/about.php'; ?>">About us</a></li>

            </p>
        </div>

        <div class="box">   
            <h2>News Letter</h2>
            <div>
                <div>Get our latest updates and offers</div> <br>
                <form onsubmit="return sendEmail()" id="news-form">
                <div id="news-response"></div>
                    <input type="email" name="email" class="news-input" id="email" placeholder="Enter your email"> 
                    <button type="submit" name="news_submit" class="news-btn">Submit</button>
                </form>
            </div>
        </div>

    </div>
        
    <div class="main-footer">
        &copy; 2020 Medufied, All rights reserved. Designed by <a href="https://csotech.com.ng"> <img src="<?php echo BASE_URL . '/img/cso.png'; ?>" height="16px"></a>  
    </div>

</footer>
    
    
</main>

<script src="<?php echo BASE_URL.'/js/jquery-3.5.1.js' ?>"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo BASE_URL.'/js/main.js' ?>"></script>
<script src="<?php echo BASE_URL.'/js/ajax.js' ?>"></script>