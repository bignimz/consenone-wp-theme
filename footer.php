            
        </div> <!-- Site content -->
    </div> <!-- Site Page -->
    
    <!-- Before Footer -->
    <div class="container">
        <div class="before-footer">
            <div class="row row-cols-md-3 cta-wrapper">
                <div class="col-md-4 col-12 mx-auto">
                    <h2 class="cta-title">Get your Free Business Consultation</h2>
                </div>

                <div class="col-md-2 col-12 mx-auto cta-icon-wrapper">
                    <div class="cta-outline">
                        <div class="cta-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mx-auto">
                    <h2 class="cta-title">+123 456789</h2>
                    <P class="cta-text">info@consenone.com</P>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer pt-5 pb-2">
        <div class="container py-5">
            <!-- Footer Content -->
            <div class="row row-cols-lg-4 mb-3 mt-5">
                <div class="col-4 col-md-12 col-10 mx-auto mb-4" >
                    <h5 class="footer-title">About Us</h5>
                    <div class="seperator"></div>
                    <p class="footer-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam provident earum ullam sapiente fugiat iusto, nisi dolor saepe eum sed.</p>
                </div>
                <div class="col-2 col-md-6 col-10 mx-auto mb-4" >
                    <h5 class="footer-title">Company</h5>
                    <div class="seperator"></div>      
                    <p class="footer-text">
                        <?php
                            $args = [
                                'menu'              => 'footer-menu',
                                'theme_location'    => 'footer-menu',
                                'container'         => '',
                                'items_wrap'        => '<ul id="%1$s" class="footer-nav">%3$s</ul>'
                            ];
                            
                            wp_nav_menu($args); 
                        ?>
                    </p>          
                </div>
                <div class="col-2 col-md-6 col-10 mx-auto mb-4" >
                    <h5 class="footer-title">Services</h5>
                    <div class="seperator"></div>
                    <p class="footer-text">
                        <?php
                            $args = [
                                'menu'              => 'footer-menu',
                                'theme_location'    => 'footer-menu',
                                'container'         => '',
                                'items_wrap'        => '<ul id="%1$s" class="footer-nav">%3$s</ul>'
                            ];
                            
                            wp_nav_menu($args); 
                        ?>
                    </p>  
                </div>
                <div class="col-4 col-md-12 col-10 mx-auto mb-4" >
                    <h5 class="footer-title">Newsletter</h5>
                    <div class="seperator"></div>
                    <p class="footer-text">Subscribe our Newsletter</p>
                    <div class="newsletter-group">
                        <input type="email" class="consen-input" placeholder="Enter E-mail">
                        <button class="consen-submit-btn" type="submit"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <!-- Copyright -->
            <div class="copyright row row-cols-md-2">
                <div class="col-md-5 col-12 mx-auto mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 col-12 mx-auto mb-3">
                    <p class="copyright-text">
                    <?php printf('%s. %s &copy; %s', get_bloginfo('name'), get_option('consenone_copyright_text', __( 'All Rights Reserved', 'consenone' )),date_i18n( 'Y' )); ?> | Theme By: <a class="highlight" href="https://nimrod.emerginghost.co.ke" target="_blank"> Nimrod Musungu</a>
                    </p>
                </div>
            </div>
        </div>
            
    </footer>
	<?php wp_footer(); ?>

</body>
</html> 