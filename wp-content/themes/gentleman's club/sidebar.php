<div id="myNav" class="overlay">
    <div class="overlay-content">
        <ul style="list-style-type: none; padding: 0;">
            <?php
            if (is_user_logged_in()) {
                wp_nav_menu(['menu' => 'menu-login']);
            } else {
                wp_nav_menu(['menu' => 'menu-default']);
            }
            ?>
        </ul>
    </div>
</div>