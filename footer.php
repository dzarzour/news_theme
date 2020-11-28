<?php 
	
	/*
		This is the template for the footer
		
		@package news
	*/
	
?>
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-6 ">
        
                             <?php 
                                 $footer_sidebars = array( 'footer-one', 'footer-two', 'footer-three' );
                                 $active_sidebars = array();
                                 $sidebar_count   = 0;
                                 
                                 foreach ( $footer_sidebars as $sidebar ) {
                                     if( is_active_sidebar( $sidebar ) ){
                                         array_push( $active_sidebars, $sidebar );
                                         $sidebar_count++ ;
                                     }
                                 }
                                 if( $active_sidebars ){ ?>
                                        
                                                    <div class="container">
                                                            <div class="grid column-<?php echo esc_attr( $sidebar_count ); ?>">
                                                <?php foreach( $active_sidebars as $active ){ ?>
                                                        <div class="col-md-3 ">
                                                                       <?php dynamic_sidebar( $active ); ?>	
                                                                    </div>
                                                <?php } ?>
                                                </div>
                                                    </div>
                                            
                                        <?php 
                                    }   
                             ?>
                                
                                
                                
                           
                </div>
           
            <div class=" col-lg-3 col-md-3 col-sm-6">
                <a class="logo footer_logo" href="/" title="الرئيسية" rel="home">
                        <?php news_logo();?>
                </a>
            <div class="region region-footer-second">
                <nav role="navigation" aria-labelledby="block-socialmediafooter-menu" id="block-socialmediafooter">
                        <!--h2 class="visually-hidden" id="block-socialmediafooter-menu">Social Media: Footer</h2-->
                        <ul class="menu menu--social-media-foot nav">
                        <?php news_display_socialmedial_icons();?>
                        </ul>
                </nav>
            </div>
          </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="copyright">
          جميع الحقوق محفوظة - Developed by :<a href="#"> Dalia Zarzour</a> 
          <script>document.write(new Date().getFullYear())</script>
        </div>
      </div>
    </div>
  </footer>


<?php wp_footer(); ?>
</body>
</html>