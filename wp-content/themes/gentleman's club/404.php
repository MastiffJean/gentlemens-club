<?php get_header("home"); ?>
<?php get_sidebar(); ?>

<div class="shop-main">

	<div class="main-shop">
		<div class="shop-text"><?php wp_title(""); ?></div>
	</div>

	<div class="shop-content">
		<section class="error-404 not-found" style="text-align: center;">
			<header class="page-header">
				<h1 class="page-title" style="font-size: 4em; font-family: 'Roboto Slab', sans-serif;">404</h1>
				<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'gentlemans-club'); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">

				<a href="<?php echo site_url('/main'); ?>" class="button-gc btn-overlay">
					to main page
				</a>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</div>

</div>

<?php get_footer("home"); ?>