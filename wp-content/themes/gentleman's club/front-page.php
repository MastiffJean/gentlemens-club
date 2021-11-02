<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="main" class="main">
    <footer>
        <a href="#categories" class="button-next">More</a>
    </footer>
</div>

<section id="categories" class="categories">
    <article class="panel" id="servicios">
    </article>
    <div class="box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">
        <div class="category-content">
            <div class="category-name">
                Bar & billiard
            </div>
            <a href="<?php echo site_url('/bar-billiard'); ?>" class="category-description button-gc btn-overlay">
                Details
            </a>
        </div>
    </div>
    <div class="box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg">
        <div class="category-content">
            <div class="category-name">
                Fishing & hunting
            </div>
            <a href="<?php echo site_url('/fishing-hunting'); ?>" class="category-description button-gc btn-overlay">
                Details
            </a>
        </div>
    </div>
    <div class="box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg">
        <div class="category-content">
            <div class="category-name">
                Horse riding
            </div>
            <a href="<?php echo site_url('/horse-riding'); ?>" class="category-description button-gc btn-overlay">
                Details
            </a>
        </div>
    </div>
</section>

<div id="news" class="news">
    <?php
    $var = 0;
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 2,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $q = new WP_Query($args);
    ?>
    <?php

    if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post();
            get_template_part('content_small', get_post_format());
        endwhile;
    endif;

    if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post();
            if ($var != 0) {
                get_template_part('template-parts/content_blog_1', get_post_format());
            } else {
                get_template_part('template-parts/content_blog', get_post_format());
                $var = 1;
            }
        endwhile;
    endif;

    ?>
    <?php wp_reset_postdata(); ?>

    <div class="news-hr"></div>
</div>

<div id="join" class="join">
    <div class="join-text">
        We are waiting for you
    </div>
    <a href="<?php echo site_url('/shop'); ?>" class="button-gc ">
        Join Us
    </a>
</div>

<?php get_footer(); ?>