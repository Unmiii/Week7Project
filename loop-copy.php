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