

<div class="footer">
  <div class="container">
    <div class="clearfix">
       <?php if ( is_active_sidebar( 'footer-menu-1' ) ) : ?>         
         <?php dynamic_sidebar('footer-menu-1');  ?>            
       <?php endif; ?>  

       <?php if ( is_active_sidebar( 'footer-menu-2' ) ) : ?>         
         <?php dynamic_sidebar('footer-menu-2');  ?>            
      <?php endif; ?>  

       <?php if ( is_active_sidebar( 'footer-menu-3' ) ) : ?>         
         <?php dynamic_sidebar('footer-menu-3');  ?>            
      <?php endif; ?>  

      <?php if ( is_active_sidebar( 'footer-menu-4' ) ) : ?>         
         <?php dynamic_sidebar('footer-menu-4');  ?>            
      <?php endif; ?>  

      <?php if ( is_active_sidebar( 'footer-menu-5' ) ) : ?>         
         <?php dynamic_sidebar('footer-menu-5');  ?>            
      <?php endif; ?>      
    </div>
  </div>

  <div class="copyright">
    <p>&copy; <?php echo date("Y");?> <?php bloginfo( 'name' ); ?></p>
  </div>
</div>
</div>
  <script type="text/javascript">
  var root ='<?php echo esc_url(home_url()); ?>'
  var template_directory = '<?php echo esc_url(get_template_directory_uri()); ?>'
  </script>
  <!--Js Section--><!-- Bootstrap core JavaScript
  ================================================== --><!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/bootstrap.min.js"></script> 
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/common.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/responsive-tabs.js"></script> 
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/ZeroClipboard.min.js"></script> 

  <script>$('.activate-deal').tooltip('hide')</script> 
  <script type="text/javascript">(function($){fakewaffle.responsiveTabs(['xs','sm']);})(jQuery);</script> 
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/classie.js"></script> 
  <script>var cuo="/";function init(){window.addEventListener('scroll',function(e){var distanceY=window.pageYOffset||document.documentElement.scrollTop,shrinkOn=300,header=document.querySelector("header");if(distanceY>shrinkOn){classie.add(header,"smaller");}else{if(classie.has(header,"smaller")){classie.remove(header,"smaller");}}});}
  window.onload=init();$(document).ready(function(){$(".the-summit").click(function(){$(".sub-nav").toggle();$("header").toggleClass('submenu');$("header.smaller").children('sub-nav').addClass('aaa');});});$(".dropdown-toggle").click(function(e){$(".mega-content").fadeToggle();});</script>

 
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/owl.carousel.js"></script> 
  <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.18/dist/jquery.flip.min.js"></script> 
  <script>
  $(".item").flip({
    trigger: 'hover',
    reverse: false,
  });
  $(document).on('click', '.yamm .dropdown-menu', function(e) {
    e.stopPropagation()
  });  
  </script> 
 <?php echo do_shortcode('[modal_popup]'); ?>
  <!--End Js Section-->
 
</form>
</body>
</html>