<?php get_header("home"); ?>
<?php get_sidebar(); ?>

<div class="product-shop">

    <div class="main-shop">
        <div class="shop-text"><?php wp_title(""); ?></div>
    </div>

    <div class="shop-content">
        <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php

                if (!defined('ABSPATH')) {
                    exit; // Exit if accessed directly
                }

                /**
                 * woocommerce_before_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                 * @hooked woocommerce_breadcrumb - 20
                 */
                do_action('woocommerce_before_main_content');
                ?>

                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <?php wc_get_template_part('content', 'single-product'); ?>

                <?php endwhile; // end of the loop. 
                ?>

                <?php
                /**
                 * woocommerce_after_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action('woocommerce_after_main_content');
                ?>

                <?php
                /**
                 * woocommerce_sidebar hook.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
                do_action('woocommerce_sidebar');
                ?>

            </main><!-- .site-main -->
        </section><!-- .content-area -->
    </div>



</div>



<?php get_footer("home"); ?>