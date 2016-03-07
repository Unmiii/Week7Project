<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
	
		<h3> Posted <?php the_date('F d, Y'); ?> by <?php the_author(); ?></h3>
		<!-- <pre> -->
		<?php
			// print_r($post);
			// In WordPress, this dollar sign within the function is a global type variable
			$imageID = get_post_thumbnail_id($post->ID);
			// In WordPress, we use . to concatenate instead of + like in JavaScript
			// echo $imageID;
			$imageURL = wp_get_attachment_url($imageID);
			// echo $imageURL;
		?>
		<!-- </pre> -->
		<!-- <?php the_content(); ?> -->
		<?php the_excerpt(); ?>
		<!-- to limit what we show on the page -->
		<img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" alt="">
		<!-- <?php the_post_thumbnail('full'); ?> -->
		<!-- However, the image size is displayed inline, which is not what we want. -->

	</article>
<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
