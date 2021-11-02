<?php get_header("category"); ?>
<?php get_sidebar(); ?>

<div id="main" class="main cat-hr">
    <footer>
        <a href="#more" class="button-next">More</a>
    </footer>
</div>


<div id="more" class="category-descr">
    <img src="<?php echo get_template_directory_uri(); ?>/img/category/horse/2.jpg">
    <div class="centered">
        <div class="box box1">
            <div class="cat-cont">

            </div>
        </div>
        <div class="box box2 rt">
            <div class="cat-cont">
                <div class="cat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                    placeat
                    animi repellat totam
                    quaerat assumenda sed aliquam at quo amet.</div>
            </div>
        </div>
    </div>
    <footer>
        <a href="#more2" class="button-next">More</a>
    </footer>
</div>

<div id="more2" class="category-descr">
    <img src="<?php echo get_template_directory_uri(); ?>/img/category/horse/3.jpg">
    <div class="centered">
        <div class="box box2 lt">
            <div class="cat-cont">
                <div class="cat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
                    placeat
                    animi repellat totam
                    quaerat assumenda sed aliquam at quo amet.</div>
            </div>
        </div>
        <div class="box box1">
            <div class="cat-cont">

            </div>
        </div>
    </div>
    <footer>
        <a href="#join" class="button-next">More</a>
    </footer>
</div>



<div id="join" class="join">
    <div class="join-text">
        We are waiting for you
    </div>
    <a href="<?php echo site_url('/shop'); ?>" class="button-gc btn-overlay">
        Join Us
    </a>
</div>

<?php get_footer(); ?>