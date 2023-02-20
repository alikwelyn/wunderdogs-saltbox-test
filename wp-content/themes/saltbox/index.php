<?php get_header(); ?>

  <div class="modal fade" id="zoomModal" tabindex="-1" aria-labelledby="zoom-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="zoom-modal-label">Popup Section - Spaces</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <h1><span>Atlanta</span></h1>
          <h2>Located in Atlanta’s bustling Upper West Side, our Atlanta location provides a convenient, thriving environment for local business owners.</h2>
          <div class="details">
            <p class="starting-price"><strong>Starting Price: </strong>$1,000</p>
            <p class="availability"><strong>Availability: </strong>Office Space Only</p>
            <p class="duration"><strong>Duration: </strong>Monthly</p>
            <p class="location"><strong>Location: </strong>Atlanta’s Industrial Upper Westside 1345 Seaboard Industrial Blvd</p>
            <?php echo do_shortcode( '[grw id="15"]' ); ?>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#" class="btn-default">LEARN MORE</a>
            <a href="#" class="btn-default book-a-tour">BOOK A TOUR</a>
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
        <div class="spaces-title d-none d-md-block">
          <div class="row">
            <div class="col-md-12">
              <h2>Spaces for companies of all sizes</h2>
            </div>
          </div>
        </div>
        <div class="spaces-header d-none d-md-block">
          <div class="row">
            <div class="col-md-6">
              <h3>Warehouses</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <a href="#" class="btn-default">COMPARE ALL WAREHOUSES</a>
            </div>
          </div>
        </div>
        <div class="spaces-content d-none d-md-block">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.svg" class="card-img-top" alt="">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-medium.svg" class="card-img-top" alt="">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-large.svg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Warehouse Large</h5>
                  <p>Operate excellently at full scale</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spaces-header d-none d-md-block">
          <div class="row">
            <div class="col-md-6">
              <h3>Office Suites</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <a href="#" class="btn-default">COMPARE ALL OFFICE SUITES</a>
            </div>
          </div>
        </div>
        <div class="spaces-content d-none d-md-block">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="zoom">
                  <a href="#">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                  </a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-suites-1-person.svg" class="card-img-top" alt="">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-suites-2-person.svg" class="card-img-top" alt="">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-suites-team.svg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Office Suites - Team</h5>
                  <p>Collaborate with your team in a modern workspace</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="spaces-title d-block d-sm-none">
          <div class="row">
            <div class="col-md-12">
              <h2>Spaces for companies of all sizes</h2>
            </div>
          </div>
        </div>
        <div class="spaces-header d-block d-sm-none">
          <div class="row">
            <div class="col-md-12">
              <h3>Warehouses</h3>
            </div>
          </div>
        </div>
        <div class="spaces-content d-block d-sm-none">
          <div class="row">
            <div id="slider" class="col-md-12">
              <div class="swiper-wrap">
                <div id="warehouses-slider" class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="zoom">
                            <a href="#">
                              <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-small.svg" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>Warehouse Small</h5>
                            <p>The launchpad that takes you out of your home</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="zoom">
                            <a href="#">
                              <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-medium.svg" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>Warehouse Medium</h5>
                            <p>For your growing operation ready to take your business to the next level</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="zoom">
                            <a href="#">
                              <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/warehouse-large.svg" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>Warehouse Large</h5>
                            <p>Operate excellently at full scale</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next" id="warehouses-next"></div>
                <div class="swiper-button-prev" id="warehouses-prev"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <a href="#" class="btn-default">COMPARE ALL WAREHOUSES</a>
            </div>
          </div>
        </div>
        <div class="spaces-header d-block d-sm-none">
          <div class="row">
            <div class="col-md-6">
              <h3>Office Suites</h3>
            </div>
          </div>
        </div>
        <div class="spaces-content d-block d-sm-none">
          <div class="row">
            <div id="slider" class="col-md-12">
              <div class="swiper-wrap">
                <div id="office-suites-slider" class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="zoom">
                            <a href="#">
                              <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-suites-1-person.svg" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>Office Suites - 1 Person</h5>
                            <p>Elevate your solopreneur space</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="zoom">
                            <a href="#">
                              <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-suites-2-person.svg" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>Office Suites - 2 Person</h5>
                            <p>Tailor-made for a dynamic duo</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="zoom">
                            <a href="#">
                              <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office-suites-team.svg" class="card-img-top" alt="">
                          <div class="card-body">
                            <h5>Office Suites - Team</h5>
                            <p>Collaborate with your team in a modern workspace</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next" id="office-suites-next"></div>
                <div class="swiper-button-prev" id="office-suites-prev"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center mb-5">
              <a href="#" class="btn-default">COMPARE ALL OFFICE SUITES</a>
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
                      <div class="collapse" id="flexCollapse">
                        <li class="check">More examples here</li>
                        <li class="check">More examples here 2</li>
                        <li class="check">More examples here 3</li>
                      </div>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <button class="btn-default" type="button" data-bs-toggle="collapse" data-bs-target="#flexCollapse" aria-expanded="false" aria-controls="flexCollapse">
                    LEARN MORE
                    </button>
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
                    <ul class="elastic">
                      <li class="check">Receiving & sorting</li>
                      <li class="check">Kitting & assembly</li>
                      <li class="check">Returns processing</li>
                      <li class="check">Process optimization</li>
                      <li class="check">Space optimization</li>
                      <div class="collapse" id="elasticCollapse">
                        <li class="check">More examples here</li>
                        <li class="check">More examples here 2</li>
                        <li class="check">More examples here 3</li>
                      </div>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <button class="btn-default" type="button" data-bs-toggle="collapse" data-bs-target="#elasticCollapse" aria-expanded="false" aria-controls="elasticCollapse">
                    LEARN MORE
                    </button>
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

    <section id="our-team">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2>Meet Our New Team</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div id="category_filter" class="col-md-12">
              <ul>
                <li><a href="">Category 1</a></li>
                <li><a href="" class="active">Category 2</a></li>
                <li><a href="">Category 3</a></li>
                <li><a href="">Category 4</a></li>
                <li><a href="">Category 5</a></li>
              </ul>
            </div>

            <div class="col-md-3" data-category="Category 1">
              <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worker-example.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Name Surname 1</h5>
                  <p>Founder and CEO</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-category="Category 2">
              <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worker-example.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Name Surname 2</h5>
                  <p>Founder and CEO</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-category="Category 3">
              <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worker-example.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Name Surname 3</h5>
                  <p>Founder and CEO</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-category="Category 4">
              <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worker-example.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Name Surname 4</h5>
                  <p>Founder and CEO</p>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-category="Category 5">
              <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/worker-example.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5>Name Surname 5</h5>
                  <p>Founder and CEO</p>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    <section id="neighborhood">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 order-2 order-md-1">
              <h2>Get to Know the Neighborhood</h2>
              <p>Atlanta’s Upper Westside is an easy-to-access neighborhood that combines the charm of in-town with the spaciousness of an industrial hub. Plus, there’s plenty of local breweries and barbecue joints perfect for a long lunch break or happy hour.</p>
              <a href="#" class="btn-default">VIEW MAP OF THE AREA</a>
            </div>
            <div class="col-md-6 d-flex justify-content-center order-md-2">
              <img class="neighborhood" src="<?php echo get_template_directory_uri(); ?>/assets/images/neighborhood.png" alt="">
              <iframe width="464" height="358" id="gmap_canvas" src="https://maps.google.com/maps?q=1345%20Seaboard%20Industrial%20Blvd%20NW,%20Atlanta,%20GA% 2030318&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="our-members-say">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2>Our Members Say</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 mx-auto">

              <div class="swiper-wrap">
                <div id="ombs" class="swiper-container">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-members-say-example.png" class="card-img-top" alt="">
                        <div class="card-body">
                          <blockquote>
                            <i class="top"></i> 
                            At Saltbox we’re surrounded by people who all have the same day-to-day issues. So we do feel like we’re at home with each other.
                            <i class="bottom"></i>
                            <p class="author">Gamal Codner</p>
                            <p class="company">Fresh Heritage</p>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-members-say-example.png" class="card-img-top" alt="">
                        <div class="card-body">
                          <blockquote>
                            <i class="top"></i>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper turpis at lacinia convallis. Curabitur tempus euismod massa.
                            <i class="bottom"></i>
                            <p class="author">Gamal Codner</p>
                            <p class="company">Fresh Heritage</p>
                          </blockquote>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="swiper-button-next" id="depoimentos-next"></div>
                <div class="swiper-button-prev" id="depoimentos-prev"></div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sfysu">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <div id="see-for-youself">
                <h2>See for Yourself</h2>
                <p>We’d love to show you around one of our facilities and answer all your questions. Contact us now to arrange a tour.</p>
                <a href="#" class="btn-default">BOOK A TOUR</a>
              </div>
              <hr class="d-block d-sm-none">
            </div>
            <div class="col-md-6">
              <div id="newsletter">
                <h2>Stay Updated with Our Newsletter</h2>
                <p>Get alerts on new locations, free education for business owners, and more - all neatly packed, shipped, and delivered straight to your inbox. Sign up now:</p>
                <input type="email" class="form-control" placeholder="Email"><br>
                <button href="#" class="btn-default">SUBSCRIBE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<?php get_footer(); ?>