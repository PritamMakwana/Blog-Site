<!-- footer-start -->
<footer class="footer-area footer-bg" data-background="assets/img/bg/footer_bg.jpg">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-contact-info">
                            <?php
                            $sql = "SELECT * FROM `web_setting` ";
                            $result = mysqli_query($conn, $sql) or die("Query Faild update");
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <h4 class="number">
                                    <?php echo $row['w_mobile']; ?>
                                </h4>
                                <h4 class="email">
                                    <?php echo $row['w_email']; ?>
                                </h4>
                                <p>
                                    <?php echo $row['w_address']; ?>
                                </p>
                                <ul class="footer-social list-wrap">
                                    <li><a href="<?php echo $row['w_facebook']; ?>" target="_blank"
                                            rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $row['w_twitter']; ?>" target="_blank"
                                            rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $row['w_instagram']; ?>" target="_blank"
                                            rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?php echo $row['w_linkedin']; ?>" target="_blank"
                                            rel="noopener noreferrer"><i class="flaticon-linkedin"></i></a></li>

                                </ul>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-4 column-2">
                    <div class="footer-widget">
                        <h4 class="fw-title">Quick Links</h4>
                        <ul class="footer-link">
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="team.php">Our Team</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="about-us.php">About us</a></li>
                            <li><a href="contact.php">Contacts</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-4 column-3">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Services</h4>
                        <ul class="footer-link">
                            <?php
                            $sql_all = "SELECT * FROM `services` LIMIT 10";


                            $result_sql_all = mysqli_query($conn, $sql_all) or die("Query Faild update");


                            while ($rowall = mysqli_fetch_assoc($result_sql_all)) {
                                ?>
                                <li><a href="<?php echo $homename . $rowall['s_slug']; ?>"><?php echo $rowall['s_name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>


                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-4 column-3">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Team</h4>
                        <ul class="footer-link">
                            <?php
                            $sql_all = "SELECT * FROM `team` LIMIT 5";


                            $result_sql_all = mysqli_query($conn, $sql_all) or die("Query Faild update");


                            while ($rowall = mysqli_fetch_assoc($result_sql_all)) {
                                ?>
                                 <li><a href="team.php"><?php echo $rowall['t_name']; ?></a></li>
                                <?php
                            }
                            ?>
                            <!-- <a href="team.php" class="btn">
                            <span class="text">More Team</span>
                            <span class="shape"></span> -->
                        </a>
                        </ul>
                       
                    </div>
                </div>

                <!-- <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-6 col-sm-7">
                    <div class="footer-widget">
                        <form action="#" class="newsletter-form">
                            <div class="form-grp">
                                <input type="email" required placeholder="Your email address">
                            </div>
                            <button type="submit" class="btn">Subscribe now <span class="shape"></span></button>
                            <p class="newsletter-alert"><span>*</span> Don't worry, we don't spam</p>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="copyright-wrap">
            <!-- <p class="copyright-text">Copyright ©2022 Design By <span>ThemeDox</span></p> -->
            <a href="https://5ginfotech.com" class="copyright-text" > <p class="copyright-text">Developed by 5ginfotech @ 2023</p></a>
        </div>
    </div>
</footer>
<!-- footer-start-end -->



<!-- JS here -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.odometer.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>