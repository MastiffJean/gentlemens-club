<div class="first-news another-news">
    <div class="news-hr"></div>
    <div class="news-name">
        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="news-hr"></div>
    <div class="news-content">
        <div class="news-text">
            <div>
                <?php
                $content = get_the_content();
                $trimmed_content = wp_trim_words($content, 32, '<a href="' . get_permalink() . '"> ...Read More</a>');
                echo $trimmed_content;
                ?>
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
        <div class="news-img">
            <?php
            if (has_post_thumbnail()) { ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/news1.jpg" alt="">
            <?php } ?>
        </div>
    </div>
    <div class="news-hr"></div>
</div>