 <!-- Footer
    ============================================= -->
    <div id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 tac">
                    <div class="emergency-call mrb-50">
                        <span class="emergency-icon"><i class="flaticon-office-telephone"></i></span>
                        <span class="des">For emergency cases</span>
                        <span class="phone">0-000-000-0000</span>
                        <div class="underline_sep"><i class="fa fa-car"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                <?php dynamic_sidebar( 'footer-one' ); ?>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <?php dynamic_sidebar( 'footer-two' ); ?>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <?php dynamic_sidebar( 'footer-three' ); ?>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                <?php dynamic_sidebar( 'footer-four' ); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer  -->

    <!-- copyright
    ============================================= -->
    <div id="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="copyright">
                        <p>&copy; Copyright 2017, All Rights Reserved. <span> A Product Design by <a href="http://thememoor.com"> Theme Moor</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copyright   -->
    <a href="#" id="scrollTopButton">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- Footer Scripts Area -->
    <!-- All JS File Here -->
    <script src="<?php echo get_template_directory_uri()?>/js/jquery-2.2.4.min.js"></script>
    <!-- Bootstrap Min Js File -->
    <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
    <!--  wow Js File  -->
    <script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- jquery ui -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery-ui.min.js"></script>
    <!-- jquery Counter -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.counterup.min.js"></script>
    <!-- hero menu -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/accordian-a2r.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.meanmenu.js"></script>
    <!-- Skillbar -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/skill.bars.jquery.js"></script>
    <!-- mixit-up -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.filterizr.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/filterize-controls.js"></script>
    <!-- magnific-popup -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom JS File -->
    <script src="<?php echo get_template_directory_uri()?>/js/custom.js"></script>
    
    <?php wp_footer()?>
</body>

</html>