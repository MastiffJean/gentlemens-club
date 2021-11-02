<div class="full-news">
    <div class="news-name">
        <?php the_title(); ?>
    </div>
    <div class="news-hr"></div>
    <div class="news-content">
        <div class="news-img">
            <?php
            if (has_post_thumbnail()) { ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/news1.jpg" alt="">
            <?php } ?>
        </div>
        <div class="news-hr"></div>
        <div class="news-text">
            <div>
                <?php the_content(); ?>
            </div>
            <div class="date">
                <div class="news-hr-min"></div>
                <div class="date-content">
                    <div><?php the_time('j F Y'); ?></div>
                    <div>
                        <?php echo get_the_category_list() ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="news-vl"></div>

    </div>
    <div class="news-hr"></div>
</div>