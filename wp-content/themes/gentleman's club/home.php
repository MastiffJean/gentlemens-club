<?php get_header("home"); ?>
<?php get_sidebar(); ?>
<?php $var = 0; ?>

<div id="news" class="news">

    <!-- Content -->
    <?php

    if (have_posts()) : while (have_posts()) : the_post();
            if ($var != 0) {
                if ($var == 1) {
                    get_template_part('template-parts/content_blog_1', get_post_format());
                    $var = 2;
                } else {
                    get_template_part('template-parts/content_blog_2', get_post_format());
                    $var = 1;
                }
            } else {
                get_template_part('template-parts/content_blog', get_post_format());
                $var = 1;
            }
        endwhile;
    endif;

    ?>

    <div class="news-pagination">
        <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'end_size' => 1,
            'prev_text' => __('&laquo;', 'textdomain'),
            'next_text' => __('&raquo;', 'textdomain'),
        ));
        ?>
    </div>
    <div class="news-hr"></div>

</div>

<?php get_footer("home"); ?>