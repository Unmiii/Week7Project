<?php wp_head(); ?>

<!-- <header>
<div class="cartMenu">
  <?php dynamic_sidebar('cart-widget-area'); ?>
</div> -->

<!-- <nav class="cartMenu">
  <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'cart'
    )); ?>
  </nav> -->

<nav class="homeMainNav">
  <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </nav>

<!-- <div class="hero">
  <div class="wrapper">
    <h2><?php bloginfo('description'); ?></h2>
  </div>
</div> -->

<div class="mainPage">
  <div class="container">
    <div class="content">
      <div class="homeDetails">
        <p class="letter_fun">Loose Leaf Tea</p>
        <script language="javascript">
          $(document).ready(function() {
            $(".letter_fun").lettering();
          });
        </script>
        <h1 class="homeLogo"><?php bloginfo( 'name' ); ?></h1>
        <h2 class="homeh2">[tɕʰaː]</h2>
        <svg class="homeLeft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><path d="M72.425 35.25c-2.808-9.55-8.278-19.454-16.258-29.44l-.248-.31-.3.262c-8.296 7.282-14.675 15.833-18.448 24.73-3.574 8.427-4.764 16.96-3.44 24.678 1.883 10.98 8.633 19.357 19.017 23.63 1.007 8.324 2.4 14.16 3.597 15.613.23.28.472.427.73.438l1.253.007s-.9-1.55-1.443-3.127c-.543-1.58-1.434-4.387-2.624-12.88 9.428-3.266 16.13-10.215 18.89-19.603 2.07-7.045 1.818-15.343-.728-23.997zm0 23.783c-2.672 9.1-9.152 15.847-18.267 19.05a181.79 181.79 0 0 1-.83-7.263c-.35-3.707-.74-9-.883-15.245 2.726-.19 8.325-3.25 10.59-4.938l-.192-.27c-2.52 1.745-7.837 4.293-10.412 4.49a201.98 201.98 0 0 1 .25-14.993c2.504-.356 9.304-3.257 11.014-4.948l-.193-.27c-2.645 1.833-8.38 4.565-10.78 4.504.22-3.73.563-7.572 1.064-11.448.27-1.815.57-3.614.896-5.344l.067-1.01-.73.92a136.037 136.037 0 0 0-.796 5.356 165.905 165.905 0 0 0-1.27 11.43c-2.42-.58-6.973-3.588-8.835-5.696l-.252.214c1.91 2.344 6.593 5.672 9.033 6.215-.37 5.08-.53 10.134-.526 15.003-2.4-.533-7.03-3.582-8.912-5.71l-.252.213c1.945 2.386 6.765 5.794 9.165 6.243.04 8.298.547 16.032 1.28 22.4C42.74 73.72 36.298 65.618 34.484 55.04 31.767 39.21 39.94 20.678 55.826 6.594c15.067 18.982 20.963 37.595 16.6 52.44z"/></svg>
        <svg class="homeRight" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125"><path d="M72.425 35.25c-2.808-9.55-8.278-19.454-16.258-29.44l-.248-.31-.3.262c-8.296 7.282-14.675 15.833-18.448 24.73-3.574 8.427-4.764 16.96-3.44 24.678 1.883 10.98 8.633 19.357 19.017 23.63 1.007 8.324 2.4 14.16 3.597 15.613.23.28.472.427.73.438l1.253.007s-.9-1.55-1.443-3.127c-.543-1.58-1.434-4.387-2.624-12.88 9.428-3.266 16.13-10.215 18.89-19.603 2.07-7.045 1.818-15.343-.728-23.997zm0 23.783c-2.672 9.1-9.152 15.847-18.267 19.05a181.79 181.79 0 0 1-.83-7.263c-.35-3.707-.74-9-.883-15.245 2.726-.19 8.325-3.25 10.59-4.938l-.192-.27c-2.52 1.745-7.837 4.293-10.412 4.49a201.98 201.98 0 0 1 .25-14.993c2.504-.356 9.304-3.257 11.014-4.948l-.193-.27c-2.645 1.833-8.38 4.565-10.78 4.504.22-3.73.563-7.572 1.064-11.448.27-1.815.57-3.614.896-5.344l.067-1.01-.73.92a136.037 136.037 0 0 0-.796 5.356 165.905 165.905 0 0 0-1.27 11.43c-2.42-.58-6.973-3.588-8.835-5.696l-.252.214c1.91 2.344 6.593 5.672 9.033 6.215-.37 5.08-.53 10.134-.526 15.003-2.4-.533-7.03-3.582-8.912-5.71l-.252.213c1.945 2.386 6.765 5.794 9.165 6.243.04 8.298.547 16.032 1.28 22.4C42.74 73.72 36.298 65.618 34.484 55.04 31.767 39.21 39.94 20.678 55.826 6.594c15.067 18.982 20.963 37.595 16.6 52.44z"/></svg>
        
        <p class="letters">Tea Shop</p>
        <script language="javascript">
          $(document).ready(function() {
            $(".letters").lettering();
          });
        </script>
        <p class="address">483 Queen St. W</p>
        <p>Toronto, ON</p>
        <p> Daily 7am - 8pm</p>
      </div><!-- /.homeDetails -->

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="homeContent">
        <div class="homeContentWrapper">
            <h2 class="homeContent">About Us</h2>
            <?php the_content(); ?>
        </div>
        <div class="homeImage"></div>
<!--         <div class="contentWrapper">
          <?php the_content(); ?>
        </div> -->
      </section>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
   <div class="homeProductsWrapper"> 
    <div class="homeProductsImage"></div>
    <div class="homeProductsInfo">
         <h2>Featured Products and Wholesale Info</h2>
         <p>Tiramisu danish chocolate I love wafer. Gummies chupa chups I love I love tiramisu. Carrot cake I love I love powder chocolate. Donut chocolate bar brownie chupa chups sesame snaps dessert pie caramels. Chocolate dragée icing candy gummi bears croissant caramels. Topping tart jelly beans icing sweet I love I love. Pudding sweet icing I love wafer croissant wafer I love cake. Croissant lemon drops I love. Oat cake cake chocolate. Donut bonbon pastry liquorice. Croissant cupcake tootsie roll biscuit. Candy canes I love jelly beans apple pie I love wafer gummies gummi bears. Chocolate bar pie jelly beans I love. Tart topping icing icing gingerbread wafer chupa chups.</p>
         <p>Sugar plum carrot cake sweet chupa chups I love candy canes jujubes. Donut macaroon wafer. Muffin cheesecake cookie I love croissant topping tart. Jelly-o cake macaroon I love toffee powder cupcake cotton candy. I love tart marshmallow gingerbread dessert carrot cake. Icing tootsie roll toffee jelly-o lemon drops. I love I love croissant I love I love. Candy canes jelly jelly-o. Chocolate I love dessert oat cake pie cheesecake gummies. Candy I love chupa chups. Toffee I love ice cream pastry cookie gummies. Bonbon oat cake I love pastry dragée.</p>
       </div><!-- /.homeProductsInfo -->
    </div><!-- /.homeProductsWrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>