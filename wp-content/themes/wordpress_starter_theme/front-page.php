<?php get_header();  ?>

<!-- MAIN starts ............................... -->
<div class="main">

<!-- MENU WRAPPER ..............................  -->
  <div class="menu-button-container">
      <div class="menu-button-wrapper">
        <button tabindex="1"id="menu-reveal" class="menu-button">Menu
        </button>
      </div> <!-- /.menu-button-wrapper -->
  </div> <!-- /. menu-button-container -->

  <!-- HERO begins ....................-->
    <section class="hero-container" id="home">
        <div class="hero-wrapper wrapper">

            <div class="hero-intro-text">
                <h1>Hello,<br />I'm Jen Taylor.</h1>
            </div>
        </div> <!-- /.hero-wrapper -->

        <div class="arrow-container fade-in">
              <div class="hero-down-arrow">
                <a href="#about" alt="Skip to main content">&#9660;</a>
              </div>
        </div>

    </section> <!-- /.hero-container -->

    <!-- SHORT BIO begins ....................-->
      <section class="shortBio-container">
        <div class="shortBio-wrapper wrapper" id="about">

          <div class="shortBio-img">
            <?php $shortBioImg = get_field('short_bio_image')  ?>
            <img src="<?php echo $shortBioImg['url'] ?>" alt="Jen Taylor walking amongst ruins overgrown by wildlife.">
          </div> <!-- /.shortBio-img -->

          <div class="shortBio-text">
            <h2> <?php the_field('short_bio_title'); ?></h2>
            <p class="text-intro"><?php the_field('short_bio_intro_text'); ?></p>

            <div class="shortBio-paragraphs">

              <div class="short-bio-1">
                <h3><?php the_field('short_bio_header_1') ?></h3>
                <p class="text-2"><?php the_field('short_bio_text_1'); ?></p>
              </div>

              <div class="short-bio-2">
                <h3><?php the_field('short_bio_header_2') ?></h3>
                <p class="text-3"><?php the_field('short_bio_text_2')?></p>
              </div>

            </div> <!-- /.shortBio-paragraphs -->
          </div> <!-- /.shortBio-text -->

        </div> <!-- /.shortBio-wrapper -->
      </section> <!-- /.shortBio-container -->

    <!-- PORTFOLIO begins ....................-->

    <section class="portfolio-container clearfix" id="portfolio">
      <div class="portfolio-wrapper wrapper">
        <h2>Portfolio</h2>

        <!-- Custom Query -->
        <?php $portfolio = new WP_Query(
          array(
            'post_type' => 'my_portfolio',
            'posts_per_page' => -1, /* '-1' refers to all of them */
            'order' => 'ASC'
          )
        );?>

        <!-- Custom Loop -->
        <?php if ($portfolio->have_posts()): ?>
          <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>

        <div class="<?php echo $post->post_name ?> portfolio-post">
          <div class="portfolio-info">

            <!-- Gets the title -->
            <h3><?php the_title(); ?></h3>

            <!-- Gets the short description -->
           <?php the_content(); ?>

          <p class="portfolio-skills"><?php the_field('portfolio_skills'); ?></p>

          <div class="portfolio-button">

              <a href="<?php the_field('portfolio_live'); ?>" class="view-live button">View Live</a>

              <a href="<?php the_field('portfolio_github'); ?>" class="view-github button" >View Github</a>

          </div> <!-- /.portfolio-button -->

          </div> <!-- /.portfolio-info -->

          <div class="portfolio-image" style="background-image: url(<?php echo hackeryou_featured_image_url($post) ?>)">
          </div> <!-- /.portfolio-image -->
        </div> <!-- /.page-name -->

        <!-- End of the custom loop -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif ?>

      </div> <!-- /.portfolio-wrapper -->
    </section> <!-- /.portfolio-container -->

  <!-- SKILLS AND TOOLS begins ............-->

  <section class="skills-container">
    <div class="skills-wrapper wrapper">
      <h2>Skills & Tools</h2>

        <div class="skills-tools-container">
        <!-- Image -->
        <div class="skills-img">
          <?php $skillsImg = get_field('skills_image'); ?>
          <img src="<?php echo $skillsImg['url'] ?>" alt="Jen Taylor hanging off the top of a bouldering wall.">
        </div> <!-- /.skills-img -->


        <!-- Skills and Interests -->
        <div class="skills-and-interests">

          <p class="skills-blurb"><?php the_field('interest_blurb')?></p>

          <div class="skills-text">
                  <div class= "skills">
                      <h3>Skills</h3>
                      <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        <li>Liquid</li>
                        <li>WordPress / PHP</li>
                        <li>Responsive Development</li>
                        <li>Web Accessibility Standards</li>
                      </ul>
                  </div> <!-- /.skills -->
                  <div class="tools">
                    <h3>Tools</h3>
                    <ul>
                      <li>Jekyll</li>
                      <li>SASS</li>
                      <li>APIs</li>
                      <li>Git & GitHub</li>
                      <li>Gulp</li>
                      <li>Photoshop</li>
                      <li>Visual Studio</li>
                    </ul>
                  </div>
                </div> <!-- /.skill-text -->

              </div> <!-- /.skills-and-interests -->

      </div> <!-- /.skills-tools-container -->
    </div> <!-- /.skills-wrapper -->
  </section> <!-- /.skills-container -->

  <!-- CONTACT begins ....................-->
  <section class="contact-container" id="contact">
    <div class="wrapper">
     <h2>Contact</h2>
    </div>

    <div class="contact-wrapper wrapper">
      <div class="contact-links-container">

        <div class="contact-links">
          <div class="jen-web">
            <a href="mailto:jen.nicole.taylor@gmail.com" class="social-network"><i class="fa fa-envelope" aria-hidden="true"></i>  E-Mail</a>
            <p>jen.nicole.taylor[at]gmail.com</p>
          </div> <!-- /.jen-web -->

          <div class="jen-web">
              <a href="https://medium.com/@jen_n_taylor" class="social-network"><i class="fa fa-medium" aria-hidden="true"></i>  Blog</a>
              <p>@jen_n_taylor</p>
          </div> <!-- /.jen-web -->

          <div class="jen-web">
              <a href="https://twitter.com/jen_n_taylor"class="social-network"><i class="fa fa-twitter" aria-hidden="true"></i>  Twitter</a>
              <p>@jen_n_taylor</p>
          </div> <!-- /.jen-web -->

        </div> <!-- /.contact-links -->

        <div class="contact-links">

          <div class="jen-web">
            <a href="https://ca.linkedin.com/in/jennicoletaylor" class="social-network"><i class="fa fa-linkedin" aria-hidden="true"></i>  LinkedIn</a>
            <p>/jennicoletaylor</p>
          </div> <!-- /.jen-web -->

          <div class="jen-web">
              <a href="https://github.com/jen-n-taylor"><i class="fa fa-github" aria-hidden="true"></i>  GitHub</a>
              <p>/jen-n-taylor</p>
          </div> <!-- /.jen-web -->
        </div> <!-- /.contact-links -->

        <div class="jen-web">
            <a href="http://codepen.io/jen_n_taylor/"><i class="fa fa-codepen" aria-hidden="true"></i>  CodePen</a>
            <p>/jen_n_taylor</p>
        </div> <!-- /.jen-web -->

        </div> <!-- /.contact-links-container -->

        <div class="contact-map" id="contact_map">
          <?php the_content(); ?>
        </div>


    </div> <!-- /.contact-wrapper wrapper  -->
  </section>

<!-- RIGHT SIDE WRAPPER ......................... -->
  <div class="right-side-container">
    <div class="right-side-wrapper">

    </div>
  </div>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



      <?php endwhile; // end the loop?>

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>
