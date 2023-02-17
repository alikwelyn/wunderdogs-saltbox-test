<?php get_header(); ?>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-6" data-aos="fade-up" data-aos-delay="200">
          <h1><span>Atlanta</span></h1>
          <h2>Located in Atlanta’s bustling Upper West Side, our Atlanta location provides a convenient, thriving environment for local business owners.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#" class="btn-default">LEARN MORE</a>
            <a href="#" class="btn-default">BOOK A TOUR</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="main">

    <section id="secondary-navbar">
      <nav class="navbar navbar-expand-md">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'second-menu',
            'menu_class' => 'navbar-nav',
            'container' => false,
          ) );
        ?>
      </nav>
    </section>

    <section id="spaces">
      <div class="container-fluid">
        <div class="spaces-title">
          <div class="row">
            <div class="col-md-12">
              <h2>Spaces for companies of all sizes</h2>
            </div>
          </div>
        </div>
        <div class="spaces-header">
          <div class="row">
            <div class="col-md-6">
              <h3>Warehouses</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <a href="#" class="btn-default">COMPARE ALL WAREHOUSES</a>
            </div>
          </div>
        </div>
        <div class="spaces-content">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Warehouse Small</h5>
                  <p>The launchpad that takes you out of your home</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Warehouse Medium</h5>
                  <p>For your growing operation ready to take your business to the next level</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Warehouse Large</h5>
                  <p>Operate excellently at full scale</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spaces-header">
          <div class="row">
            <div class="col-md-6">
              <h3>Office Suites</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <a href="#" class="btn-default">COMPARE ALL OFFICE SUITES</a>
            </div>
          </div>
        </div>
        <div class="spaces-content">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Office Suites - 1 Person</h5>
                  <p>Elevate your solopreneur space</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Office Suites - 2 Person</h5>
                  <p>Tailor-made for a dynamic duo</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Office Suites - Team</h5>
                  <p>Collaborate with your team in a modern workspace</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<?php get_footer(); ?>