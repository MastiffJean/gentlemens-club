<?php get_header("home"); ?>
<?php get_sidebar(); ?>

<div class="shop-main">

	<div class="main-shop">
		<div class="shop-text"><?php wp_title(""); ?></div>
	</div>

	<div class="shop-content">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="shop-text-mobile"><?php wp_title(""); ?></div>
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'page');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- .site-main -->
		</section><!-- .content-area -->
	</div>

</div>

<?php get_footer("home"); ?>