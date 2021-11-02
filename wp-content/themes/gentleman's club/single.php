<?php get_header("home"); ?>
<?php get_sidebar(); ?>
<?php $var = 0; ?>

<div id="news" class="news">

	<!-- Content -->
	<?php

	if (have_posts()) : while (have_posts()) : the_post();
			get_template_part('template-parts/content_single', get_post_format());
		endwhile;
	endif;

	?>

</div>

<?php get_footer("home"); ?>