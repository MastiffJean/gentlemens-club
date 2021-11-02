<?php get_header("home"); ?>
<?php get_sidebar(); ?>

<div class="main-account">

    <div class="main-shop">
        <div class="shop-text"><?php wp_title(""); ?></div>
    </div>

    <div class="shop-content">
        <section id="primary" class="content-area">
            <div class="shop-text-mobile"><?php wp_title(""); ?></div>
            <main id="main" class="site-main my-account" role="main">

                <?php

                defined('ABSPATH') || exit;

                /**
                 * My Account navigation.
                 *
                 * @since 2.6.0
                 */
                do_action('woocommerce_account_navigation'); ?>

                <div class="woocommerce-MyAccount-content">
                    <?php
                    /**
                     * My Account content.
                     *
                     * @since 2.6.0
                     */
                    do_action('woocommerce_account_content');
                    ?>
                </div>


            </main><!-- .site-main -->
        </section><!-- .content-area -->
    </div>



</div>



<?php get_footer("home"); ?>