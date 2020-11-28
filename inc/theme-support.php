<?php 

/*
  @package news
 
   ========================
        THEME SUPPORT OPTIONS
    ========================

    */
// news logo 
function news_custom_logo() {       
    add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme' , 'news_custom_logo' );

    //add thumbnails
    add_theme_support('post-thumbnails');
    // add post formate 
    $formats = array( 'gallery','image','video');
    add_theme_support( 'post-formats',$formats );

    $header = get_option('custom_header');
if (@$header == 1) {
    add_theme_support('custom-header');
}

//activate nav menuoption
function news_nav_menu(){
    register_nav_menu(
        'primary',
        'Header Navigation Menu' );
}
add_action( 'after_setup_theme','news_nav_menu' );

// socialmedia icon display
function news_display_socialmedial_icons(){
    $social_urls=array(
        'facebook' =>'facebook_url',
        'twitter' =>'twitter_url',
        'instagram'=>'instgram_url',
        'telegram'=>'telegram_url',
        'youtube'=>'youtube_url',
        'whatsapp'=>'whatsapp_url'
    );
    foreach($social_urls as $social_name => $url){
        $social_url=esc_attr( get_option(  $url) );
        $socia_icon='<i class= "dashicons dashicons-'.$social_name.' "></i>';
        if(!empty ($social_url)){  ?>
            <li>
                <a href="<?php echo $social_url; ?>" target="_blank" ><?php echo $socia_icon ?></a>
            </li>
        <?php
        }
    }

}

function news_logo(){
                                    
    $logo = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $logo , 'full' );  
    ?>                   
    <img src="<?php echo  $image[0];?>" alt="الرئيسية" />
    <?php
}