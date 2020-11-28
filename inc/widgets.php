<?php 
/**
 * @package news
 */

 function news_widgets_init(){
    $sidebars=array(

        'footer-one' =>array(
            'id'          =>'footer-one',
            'name'        =>__('News Footer one','news'),
            'description' =>__( 'Add News footer one widgets here.', 'news' ),

        ),
        'footer_two' =>array(
            'id'            =>'footer-two',
            'name'          =>__('News footer two','news'),
            'description'   =>__( 'Add News footer two widgets here.', 'news' ),
        ),
        'footer_three' =>array(
            'id'            =>'footer-three',
            'name'          =>__('News footer three','news'),
            'description'   =>__( 'Add News footer three widgets here.', 'news' ),
        ),
        
    );

    foreach($sidebars as $sidebar){
        register_sidebar(  
            array(
            'name'          => esc_html($sidebar['name']),
            'id'            =>esc_attr( $sidebar['id'] ),
            'description'   =>esc_html( $sidebar['description'] ),
            'before_widget'=>'<section id="%1$s" class=" widget %2$s">',
            'after_widget' =>'</section>',
            'before_title' =>'<h2 class="widget-title" itemprop="name">',
            'after_title'  =>'</h2>',
            )   
        );
    }
 }


 add_action( 'widgets_init', 'news_widgets_init' );