<?php get_header();  ?>

<div class="contentWrapper clearfix">
  <div class="main clearfix">
    <div class="container clearfix">
      <div class="content clearfix">
       <!--  <img src=" <?php bloginfo('template_directory') ?>/images/hero.jpg " alt=""> -->
       <?php the_post_thumbnail('full') ?>
        <!-- This lets us dynamically input images  -->
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <h3><?php the_content(); ?></h3>
          <div class="contactLogo clearfix">
              <h2>차</h2>
              <h4>[tɕʰaː]</h4>
              <p>Store Information</p>
          </div>
          <div class="storeInfoWrapper clearfix">          
            <div class="storeInfoA">
                <h4>Postal Address</h4>
                <p>483 Queen St. W</p>
                <p>Toronto, ON</p>
            </div>
            <div class="storeInfoB">
              <h4>Email</h4>
              <p>Support/Sales: <span class="highlight">customerservice@unmi.com</span></p>
              <p>General Inquiries: <span class="highlight">hello@unmi.com</span></p>
            </div>
          </div>
        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->

      <?php get_sidebar(); ?>

    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>