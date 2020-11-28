<?php
/**
 * @package  news
 */


function news_admin_page(){
    add_menu_page(
        'news theme',
        ' news theme',
        'manage_options', 
        'news_theme_settings', 
        'news_create_admin_page', 
        'dashicons-admin-site-alt' 
        );
       
        
    add_submenu_page( 
        'news_theme_settings', 
        ' NEWS Social Media ', 
        'Social Media Links', 
        'manage_options', 
        'news_social_media_links', 
        'news_social_media_links_callbacks' 
        );    
        add_action( 'admin_init', 'news_custom_settings');
} 
add_action( 'admin_menu','news_admin_page');

function news_custom_settings(){

    $social_url=array(
       'Facebook' =>'facebook_url',
        'Twitter' =>'twitter_url',
        'Instgram'=>'instgram_url',
        'Telegram'=>'telegram_url',
        'Youtube'=>'youtube_url',
        'Whatsapp'=>'whatsapp_url'
    );
    
    foreach($social_url as $social_name => $url){
        register_setting( 'news_social_links_group', $url );
        
    }
   
    add_settings_section( 'news_social_options', 'Social Media Options', 'news_social_media_options', 'news_social_media_links' );
   // foreach($social_url as $social_name => $url){
         add_settings_field( "news_social_urls", $social_url['name'], 'news_socsial_callback', 'news_social_media_links', 'news_social_options',$social_url);
        //  add_settings_field( 'news_facebook', 'Facebook URL', 'news_facebook', 'news_social_media_links', 'news_social_options');
       // add_settings_field( $id:string, $title:string, $callback:callable, $page:string, $section:string, $args:array )
         
 //   }

}
function news_socsial_callback($social_url){
    
    foreach($social_url as $social_name => $url){
    $VALUE=esc_url( get_option( $url ) ) ;
    echo  '<p>'.$social_name .':</p>';
    echo'<input type="text"   name="'.$url.'" value="'.$VALUE.'"  placeholder="'.$social_name.' " />'."</br>";
    }
}

//social links callbacks
function news_social_media_options(){

}
/*
function news_custom_settings(){
    //register social media links
    register_setting( 'news_social_links_group', 'facebook_url');
    register_setting( 'news_social_links_group', 'twitter_url');
    register_setting( 'news_social_links_group', 'instgram_url');
    register_setting( 'news_social_links_group', 'telegram_url');
    register_setting( 'news_social_links_group', 'youtube_url');
    register_setting( 'news_social_links_group', 'whatsapp_url');
    //social media section
    add_settings_section( 'news_social_options', 'Social Media Options', 'news_social_media_options', 'news_social_media_links' );
    //add_settings_section( $id:string, $title:string, $callback:callable, $page:string )

    //social media fields
    add_settings_field( 'news_facebook', 'Facebook URL', 'news_facebook', 'news_social_media_links', 'news_social_options');
    add_settings_field( 'news_twitter', 'Twitter URL', 'news_twitter', 'news_social_media_links','news_social_options');
    add_settings_field( 'news_telegram', 'Telegram URL', 'news_telegram', 'news_social_media_links','news_social_options');
    add_settings_field( 'news_instgram', 'Instgram URL', 'news_instgram', 'news_social_media_links','news_social_options');
    add_settings_field( 'news_whatsapp', 'Whatsapp URL', 'news_whatsapp', 'news_social_media_links','news_social_options');
    add_settings_field( 'news_youtube', 'Youtube URL', 'news_youtube', 'news_social_media_links','news_social_options');
}

//social links callbacks
function news_social_media_options(){

}
function news_facebook(){
    $facebookURL=esc_attr( get_option( 'facebook_url' ) ) ;
    echo '<input type="text"   name="facebook_url" value="'.$facebookURL.'"  placeholder="facebook Url " />';


}
function news_twitter(){
   $twitterUrl=esc_attr( get_option( 'twitter_url') );
   echo '<input type="text" name="twitter_url" value="'.$twitterUrl.'" placeholder="Twitter Url">';
}
function news_telegram(){
    $telegramUrl=esc_attr( get_option( 'telegram_url',  ) );
    echo '<input type="text" name="telegram_url" value="'.$telegramUrl.'" placeholder="telegram Url">';

}
function news_instgram(){
    $instgramUrl=esc_attr( get_option( 'instgram_url',  ) );
    echo '<input type="text" name="instgram_url" value="'.$instgramUrl.'" placeholder="instgram Url">';

}
function news_whatsapp(){
    $whatsappUrl=esc_attr( get_option( 'whatsapp_url',  ) );
    echo '<input type="text" name="whatsapp_url" value="'.$whatsappUrl.'" placeholder="whatsapp Url">';
}
function news_youtube(){
    $youtubeUrl=esc_attr( get_option( 'youtube_url',  ) );
    echo '<input type="text" name="youtube_url" value="'.$youtubeUrl.'" placeholder="youtube Url">';
}

*/
function news_social_media_links(){
    echo "Custimize Social Links  Options";
}

function news_social_media_links_callbacks(){
    require_once get_template_directory().'/inc/templates/admin_social_media.php';
}

function news_create_admin_page(){
    require_once get_template_directory().'/inc/templates/news_admin.php';
}