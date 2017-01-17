<footer>
  <div class="footer-wrapper wrapper">
  	
  	<div class="footer-info fade-in ">
	    <!-- <p>&copy; Jen Taylor <?php // echo date('Y'); ?></p> -->
	    <p><?php the_field('get_in_touch', 'options') ?></p>
	</div> <!-- /.footer-info -->
   
    <div class="footer-social-nav fade-in">
    	<?php 
          wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'footer'
          )); 
        ?>
    </div> <!-- /.footer-social-nav -->

  </div> <!-- /.footer-wrapper -->
</footer>


<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-83647836-1"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>