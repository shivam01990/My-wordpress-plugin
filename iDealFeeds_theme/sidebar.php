<ul id="sidebar">
<?php if ( is_active_sidebar( 'sidebar-right-1' ) ) : ?>
<div id="sidebar-right-1">
   <?php dynamic_sidebar('sidebar-right-1'); ?> 
</div> 
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-right-2' ) ) : ?>
<div id="sidebar-right-2"> 
   <?php dynamic_sidebar('sidebar-right-2');  ?>  
</div>
<?php endif; ?>
</ul>