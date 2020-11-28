<?php 
/**
 * @package  news
 */
?>
 
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php  settings_fields( 'news_social_links_group' );?>
    <?php do_settings_sections( 'news_social_media_links' )?>
    <?php  submit_button();?>
</form>