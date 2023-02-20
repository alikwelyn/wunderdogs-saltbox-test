    <footer>
        <div class="footer-upper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="social-icons">
                            <div class="follow-us">
                                <p>Follow us on</p>
                            </div>
                            <ul class="styled-icons">
                                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <ul class="mail">
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="" target="_blank">support@saltbox.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saltbox-logo-footer.svg" alt="<?php echo wp_get_document_title(); ?>" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Saltbox</h4>
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'footer-menu-1',
                            'container' => false,
                            ) );
                        ?>
                        <hr class="d-block d-sm-none">
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Products</h4>
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'footer-menu-2',
                            'container' => false,
                            ) );
                        ?>
                        <hr class="d-block d-sm-none">
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Locations</h4>
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'footer-menu-3',
                            'container' => false,
                            ) );
                        ?>
                        <hr class="d-block d-sm-none">
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Resources</h4>
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'footer-menu-4',
                            'container' => false,
                            ) );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>