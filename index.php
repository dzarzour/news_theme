<?php get_header(); ?>
        <div class="inner">
            <div class="main_container">
                <div class="main-col">
                    <?php  if ( have_posts() ) :
                         while ( have_posts() ) : the_post();echo "---------------------------------------"; ?>
                         
                            <p><?php the_title();?></p>   
                            <p><?php the_author();?></p>
                            <p><?php the_category();?></p>
                            <p><?php the_content();?></p>   
                            <p><?php the_post_thumbnail_caption();?></p>   
                        <?php endwhile; ?>
                    <?php  endif; ?>
                    <?php wp_reset_query(); ?>
                   
                        <?php echo apply_filters('the_content', ''); 
                        echo "---------------------------------------";
                        ?>
                   
                </div> <!--main column-->
                <?php get_sidebar(); ?>
            <div class="clear"></div>
            </div> <!--main container-->            
                <?php get_sidebar(); ?>
        </div> <!--main inner-->
<?php get_footer(); ?>