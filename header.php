<?php
/**
 * @package news
 */

?>
<!DOCTYPE html>
<html <?php language_attributes()?>>
    <head>
        <title><?php bloginfo( 'name' ); wp_title(); ?></title>
        <meta charset="<?php bloginfo( 'charset' );?>">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1" >
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if(is_singular() && pings_open( get_queried_object()) ):
            ?> <link rel="pingback" href="<?php bloginfo( 'pingback_url' )?>"><?php
        endif;
        wp_head(  );
        /*$custom_css=esc_attr( get_option( 'sunset_css' ) );
        if(!empty ($custom_css)):
        echo "<style>".$custom_css."</style>";
        endif;
        */
        ?>

    </head>
    <body <?php body_class();?>>           
        <div class="">
            <div class="row">
                <header class="navbar navbar-default" id="navbar" role="banner">
                    <div class="navbar-header">
                        <div class="container">
                            <button type="button" class="header-bottom-toggle pull-left">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="region region-navigation">
                                <a class="logo navbar-btn pull-left" href="/" title="الرئيسية" rel="home">
                                    <?php echo news_logo(); ?>
                                </a>    
                                <nav role="navigation" aria-labelledby="block-socialmediaheader-menu" id="block-socialmediaheader">
                                    <h2 class="visually-hidden" id="block-socialmediaheader-menu">Social Media: Headerwwww</h2>
                                    <ul class="menu menu--social-media nav"> 
                                        <li>
                                        </i>
                                        <?php echo news_display_socialmedial_icons(); ?>
                                </nav>
                            </div>
                        </div>
                    <div class="mobile-navbar">
                    <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="search-btn-mobile">
                        <i class="dashicons dashicons-search " aria-hidden="true" class="navbar-toggle" data-toggle="collapse" data-target="#alkhaleej-mobile-search"></i>
                    </div>
                    <div class="region region-mobile-only">
                        <nav role="navigation" aria-labelledby="block-socialmediaheader-2-menu" id="block-socialmediaheader-2">
                            <h2 class="visually-hidden" id="block-socialmediaheader-2-menu">Social Media: Header</h2>    
                                
                        </nav>
                    </div>

                </div>
          </div>
        </div>

        <div class="alkhaleej-mobile-search alkhaleej-search-wrapper collapse" id="alkhaleej-mobile-search">
            <div class="container">
                <div class="region region-search">
                    <div class="search-block-form block block-search block-search-form-block" data-drupal-selector="search-block-form" id="block-searchform" role="search">
                        <form action="/search/content" method="get" id="search-block-form" accept-charset="UTF-8">
                            <div class="form-item js-form-item form-type-search js-form-type-search form-item-keys js-form-item-keys form-no-label form-group">
                                <label for="edit-keys" class="control-label sr-only">بحث</label>
                                <div class="input-group"><input title="أدخل العبارات التي تريد البحث عنها." data-drupal-selector="edit-keys" class="form-search form-control" placeholder="بحث" type="search" id="edit-keys" name="keys" value="" size="15" maxlength="128" data-toggle="tooltip" /><span class="input-group-btn"><button type="submit" value="بحث" class="button js-form-submit form-submit btn-primary btn icon-only" name=""><span class="sr-only">بحث</span><span class="icon glyphicon glyphicon-search" aria-hidden="true"></span></button></span></div>
                                </div>
                            <div class="form-actions form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-actions" id="edit-actions"></div>

                        </form> 

                    </div>

                </div>

            </div>
        </div>
        <div class="alkaleej-main-menu">
            <div class="container">
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <div class="region region-navigation-collapsible">
                        <nav role="navigation" aria-labelledby="block-alkhaleej-main-menu-menu" id="block-alkhaleej-main-menu">
                            <h2 class="sr-only" id="block-alkhaleej-main-menu-menu ">Main navigation</h2>
                                <?php
                                    wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_class' => 'menu menu--main nav navbar-nav',
                                    'walker' => new news_Walker_Nav_Primary()
                                    ) );	
                                ?>
                        </nav>

                    </div>
                <div class="search-btn">
                    <i class="dashicons dashicons-search" aria-hidden="true" class="navbar-toggle" data-toggle="collapse" data-target="#alkhaleej-search"></i>
                </div>
            </div>
        </div>
    </div>
        <div class="alkhaleej-search alkhaleej-search-wrapper  collapse" id="alkhaleej-search">
            <div class="container">
                <div class="region region-search">
                    <div class="search-block-form block block-search block-search-form-block" data-drupal-selector="search-block-form" id="block-searchform" role="search">
                        <form action="/search/content" method="get" id="search-block-form" accept-charset="UTF-8">
                            <div class="form-item js-form-item form-type-search js-form-type-search form-item-keys js-form-item-keys form-no-label form-group">
                                <label for="edit-keys" class="control-label sr-only">بحث</label>
                                <div class="input-group"><input title="أدخل العبارات التي تريد البحث عنها." data-drupal-selector="edit-keys" class="form-search form-control" placeholder="بحث" type="search" id="edit-keys" name="keys" value="" size="15" maxlength="128" data-toggle="tooltip" /><span class="input-group-btn"><button type="submit" value="بحث" class="button js-form-submit form-submit btn-primary btn icon-only" name=""><span class="sr-only">بحث</span><span class="dashicons dashicons-search" aria-hidden="true"></span></button></span></div>
                                </div>
                            <div class="form-actions form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-actions" id="edit-actions"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </header>
    
    </div><!-- .row -->
</div><!-- .container -->
        


<?php
