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
                  <h5>Warehouse Small</h5>
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
                  <h5>Warehouse Medium</h5>
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
                  <h5>Warehouse Large</h5>
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
                  <h5>Office Suites - 1 Person</h5>
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
                  <h5>Office Suites - 2 Person</h5>
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
                  <h5>Office Suites - Team</h5>
                  <p>Collaborate with your team in a modern workspace</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="what-youll-get">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2>What you'll get</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-img-body">
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/daily-carrier-pickups.png" alt="">
                </div>
                <div class="card-body">
                  <h5>Daily Carrier Pickups</h5>
                  <p>Stop lugging orders to UPS or the post office. Leave your outgoing packages for pick-up and move on with your day.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-img-body">
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/security.png" alt="">
                </div>
                <div class="card-body">
                  <h5>Security</h5>
                  <p>Video surveillance, enterprise-grade security system, controlled access and a nightly security patrol.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-img-body">
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/conference-rooms.png" alt="">
                </div>
                <div class="card-body">
                  <h5>Conference Rooms</h5>
                  <p>Host guests or teammates in comfort.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-img-body">
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/loading-docks.png" alt="">
                </div>
                <div class="card-body">
                  <h5>Loading Docks</h5>
                  <p>Receive freight and large orders with ease.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-img-body">
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-studio.png" alt="">
                </div>
                <div class="card-body">
                  <h5>Photo Studio</h5>
                  <p>Keep your product photos up-to-date.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-img-body">
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/amenities.png" alt="">
                </div>
                <div class="card-body">
                  <h5>Amenities</h5>
                  <p>High-speed wifi, stocked kitchen with fresh-brewed coffee, air-conditioning, utilities, and cleaning services all included.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="boxes">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Flex Storage</h4>
                    <p>On-demand storage to handle spikes in orders that includes:</p>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li class="check">Transparent Pricing: Pay by the pallet, by the day.</li>
                      <li class="check">Precise Tracking: Digital tracking at every step, from pickup to storage.</li>
                      <li class="check">Security: Everything is behind lock-and-key.</li>
                      <li class="check">Temperature controlled: Unexpected heat wave or polar vortex? Your inventory is protected from the elements.</li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn-default">LEARN MORE</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4 class="elastic">Elastic Workforce</h4>
                    <p>On-demand operations specialists to help with:</p>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li class="check">Receiving & sorting</li>
                      <li class="check">Kitting & assembly</li>
                      <li class="check">Returns processing</li>
                      <li class="check">Process optimization</li>
                      <li class="check">Space optimization</li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn-default">LEARN MORE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="cta">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="row d-flex align-items-center">
                  <div class="col-md-6">
                    <h2>Want to learn more about what each Saltbox location contains?</h2>
                  </div>
                  <div class="col-md-6">
                    <a href="#" class="btn-default">VIEW OUR WORKSPACE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
<?php get_footer(); ?>