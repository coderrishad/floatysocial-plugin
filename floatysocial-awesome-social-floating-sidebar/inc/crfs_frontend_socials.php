<?php

//Plugin Activation setting 
function crfs_button(){
    ?>

    <!-- Social Icons Custom Design -->
    <style>
        #crfs_social_icons_wrap a{
            background-color: <?php print get_option( 'crfs_primary_color');?> !important;
            color: <?php print get_option( 'crfs_secondary_color'); ?> !important;
        }
        #crfs_social_icons_wrap a {
            transition: .5s;
        }
        #crfs_social_icons_wrap a:hover {
            transform: rotate(360deg);
            background: <?php print get_option( 'crfs_secondary_color');?> !important;
            color: <?php print get_option( 'crfs_primary_color');?> !important;
        }
    </style>

    <ul id="crfs_social_icons_wrap" style="<?php if(get_option( 'crfs_position')=='true'){echo "left: 0 !important; right: auto;";}?>">
        
    
        
        <?php
            if ( get_option('crfs_facebook_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_facebook_url'); ?>" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_instagram_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_instagram_url'); ?>" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>

        <?php
            if ( get_option('crfs_twitter_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_twitter_url'); ?>" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>

        <?php
            if ( get_option('crfs_linkedin_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_linkedin_url'); ?>" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_youtube_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_youtube_url'); ?>" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_rss_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_rss_url'); ?>" target="_blank">
                            <i class="fa-solid fa-rss"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_pinterest_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_pinterest_url'); ?>" target="_blank">
                            <i class="fa-brands fa-pinterest"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_behance_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_behance_url'); ?>" target="_blank">
                            <i class="fa-brands fa-behance"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_github_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_github_url'); ?>" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_reddit_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_reddit_url'); ?>" target="_blank">
                            <i class="fa-brands fa-reddit"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_stackoverflow_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_stackoverflow_url'); ?>" target="_blank">
                            <i class="fa-brands fa-stack-overflow"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_tumblr_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_tumblr_url'); ?>" target="_blank">
                            <i class="fa-brands fa-square-tumblr"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>
        <?php
            if ( get_option('crfs_vine_url') ) :
                    ?>
                    <li>
                        <a href="<?php print get_option('crfs_vine_url'); ?>" target="_blank">
                            <i class="fa-brands fa-vine"></i>
                        </a>
                    </li>
                    <?php
            endif;
        ?>

    </ul>

    
    
    <?php
}
add_action( 'wp_footer', 'crfs_button' );