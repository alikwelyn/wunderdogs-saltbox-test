<?php get_header(); ?>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-6" data-aos="fade-up" data-aos-delay="200">
          <h1><span>Atlanta</span></h1>
          <h2>Located in Atlanta’s bustling Upper West Side, our Atlanta location provides a convenient, thriving environment for local business owners.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#" class="btn book-a-tour">LEARN MORE</a>
            <a href="#" class="btn book-a-tour">BOOK A TOUR</a>
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

  </main>
<?php get_footer(); ?>