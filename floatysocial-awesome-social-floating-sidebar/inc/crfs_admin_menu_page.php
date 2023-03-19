<?php

//* Plugin Option Page Function
function crfs_add_theme_page(){
    add_menu_page( 'FloatySocial', 'FloatySocial', 'manage_options', 'floatysocial-plugin-option', 'crfs_create_page', 'dashicons-share-alt2', 101 );
}
add_action( 'admin_menu', 'crfs_add_theme_page');

//* Plugin Callback
function crfs_create_page(){
    ?>

    <div class="crfs_header">
        <h2><?php print esc_attr( "FloatySocial - Awesome Social Floating Sidebar" )?>
    </h2>
    </div>
    <div class="crfs_wrap">
        <div class="crfs_left">
            <h5 class="crfs_title"><?php print _e( "FloatySocial Social URL", "floatysocial" )?></h5>
            <form action="options.php" method="post" class="crfs_form">
                <?php wp_nonce_field( 'update-options');?>


                <div class="crfs_content_area">
                    <div class="input_wrap">
                        <label for="crfs_facebook_url">Facebook</label>
                        <input type="url" name="crfs_facebook_url" id="crfs_facebook_url" value="<?php print get_option( 'crfs_facebook_url'); ?>" placeholder="Facebook URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_instagram_url">Instagram</label>
                        <input type="url" name="crfs_instagram_url" id="crfs_instagram_url" value="<?php print get_option( 'crfs_instagram_url'); ?>" placeholder="Instagram URL">  
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_twitter_url">Twitter</label>
                        <input type="url" name="crfs_twitter_url" id="crfs_twitter_url" value="<?php print get_option( 'crfs_twitter_url'); ?>" placeholder="Twitter URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_linkedin_url">Linkedin</label>
                        <input type="url" name="crfs_linkedin_url" id="crfs_linkedin_url" value="<?php print get_option( 'crfs_linkedin_url'); ?>" placeholder="Linkedin URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_youtube_url">Youtube</label>
                        <input type="url" name="crfs_youtube_url" id="crfs_youtube_url" value="<?php print get_option( 'crfs_youtube_url'); ?>" placeholder="Youtube URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_rss_url">RSS</label>
                        <input type="url" name="crfs_rss_url" id="crfs_rss_url" value="<?php print get_option( 'crfs_rss_url'); ?>" placeholder="RSS URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_pinterest_url">Pinterest</label>
                        <input type="url" name="crfs_pinterest_url" id="crfs_pinterest_url" value="<?php print get_option( 'crfs_pinterest_url'); ?>" placeholder="Pinterest URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_behance_url">Behance</label>
                        <input type="url" name="crfs_behance_url" id="crfs_behance_url" value="<?php print get_option( 'crfs_behance_url'); ?>" placeholder="Behance URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_github_url">Github</label>
                        <input type="url" name="crfs_github_url" id="crfs_github_url" value="<?php print get_option( 'crfs_github_url'); ?>" placeholder="Github URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_reddit_url">Reddit</label>
                        <input type="url" name="crfs_reddit_url" id="crfs_reddit_url" value="<?php print get_option( 'crfs_reddit_url'); ?>" placeholder="Reddit URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_stackoverflow_url">StackOverFlow</label>
                        <input type="url" name="crfs_stackoverflow_url" id="crfs_stackoverflow_url" value="<?php print get_option( 'crfs_stackoverflow_url'); ?>" placeholder="StackOverFlow URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_tumblr_url">Tumblr</label>
                        <input type="url" name="crfs_tumblr_url" id="crfs_tumblr_url" value="<?php print get_option( 'crfs_tumblr_url'); ?>" placeholder="Tumblr URL">
                    </div>
                    <div class="input_wrap">
                        <label for="crfs_vine_url">Vine</label>
                        <input type="url" name="crfs_vine_url" id="crfs_vine_url" value="<?php print get_option( 'crfs_vine_url'); ?>" placeholder="Vine URL">
                    </div>
                </div>


                <div class="crfs_design_area">
                   <h5><?php print _e( "FloatySocial Social Design", "floatysocial" )?></h5>
                    <div class="input_wrap">
                        <label>Primary Color </label>
                        <input type="text" name="crfs_primary_color" value="<?php print get_option( 'crfs_primary_color'); ?> " id="crfs_primary_color" class="color-picker" data-alpha-enabled="true" data-default-color="#1c045e">
                    </div>
                    <div class="input_wrap">
                        <label>Secondary Color</label>
                        <input type="text" name="crfs_secondary_color" value="<?php print get_option( 'crfs_secondary_color'); ?>" id="crfs_secondary_color" class="color-picker" data-alpha-enabled="true" data-default-color="#ffffff">
                    </div>
                    <div class="input_wrap crfs_position">
                        <label>Icons Position</label>
                        <label>
                            <input type="radio" name="crfs_position" value="true" <?php if(get_option( 'crfs_position')=='true'){echo "checked='checked'";}?> >Left <br>
                        </label>
                        <label>
                            <input type="radio" name="crfs_position" value="false" <?php if(get_option( 'crfs_position')=='false'){echo "checked='checked'";}?> >Right
                        </label>
                    </div>
                </div>
               
                
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="crfs_facebook_url, crfs_instagram_url, crfs_twitter_url, crfs_linkedin_url, crfs_youtube_url, crfs_rss_url, crfs_pinterest_url, crfs_behance_url, crfs_github_url, crfs_reddit_url, crfs_stackoverflow_url, crfs_tumblr_url, crfs_vine_url, crfs_primary_color, crfs_secondary_color, crfs_position">
                <input type="submit" name="submit" class="button button-primary" value="<?php _e('Save Changes', 'floatysocial') ?>">
            </form>
        </div>
        <div class="crfs_right">
            <div class="crfs_author_wrap">
                <h5 class="crfs_title"><?php print _e( "About Author", "floatysocial" )?></h5>
                <div class="crfs_author_img">
                    <img src="<?php echo plugins_url('assets/images/rishad.jpg', __DIR__); ?>" alt="Rishad Uddin">
                </div>
                <div class="crfs_author_details">
                    <p><?php print _e( " I am an experienced web developer with expertise in front-end and back-end development using various technologies. I build efficient, scalable, and visually appealing web applications that provide engaging and user-friendly experiences.", "floatysocial" )?></p>
                    <a href="https://github.com/coderrishad" target="_blank" class="crfs_btn"><?php print _e( "Contact with me", "floatysocial" )?></a>
                </div>
            </div>

        </div>
    </div>

    <?php
}
