<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jayleth
 */

?>


<?php wp_footer(); ?>

<!-- FOOTER
		 ====================================================================================== -->
		 <div id="footer">
			 <div class='container'>
					 <div class='row'>
							 <div class='col-sm-4 col-md-3 col-xs-6'>
									 <h4>The Jay Letheby Story</h4>
									 <p><i>Web Development, Mobile Apps and </i></p>
									 <p><a href='my-story.html'>More...</a></p>
							 </div>

							 <div class='col-sm-2 col-xs-6 col-md-offset-1'>
									 <h4>Links</h4>
											 <ul class='list-unstyled'>
													 <li><a href='index.html'>Home</a></li>
													 <li><a href='my-story.html'>Jay's Story</a></li>
													 <li><a href='blog.html'>Jay's Blog</a></li>
													 <li><a href='virtual-gallery.html'>Folio</a></li>
													 <li><a href='contact-me.html'>Contact Jay</a></li>
											 </ul>
							 </div>

							 <div class='clearfix visible-xs'></div>

							 <div class='col-sm-2 col-xs-6'>
											 <h4>I'm Social</h4>
											 <ul class='list-unstyled'>
												 <li><a href='https://au.linkedin.com/in/jayletheby'>LinkedIn</a></li>
												 <li><a href='https://twitter.com/lees_Art'>Twitter</a></li>
												 <li><a href='https://www.facebook.com/linda.l.art/' target="_blank" >Facebook</a></li>
											 </ul>
							 </div>

							 <div class='col-sm-4 col-md-3 col-md-offset-1 col-xs-6'>
											 <h4>Contact Jay</h4>
											 <ul class='list-unstyled'>
													 <li><i class='glyphicon glyphicon-phone'></i>0449979181<li>
													 <li><i class='glyphicon glyphicon-envelope'></i> <a href='mailto:#'>jay.letheby@gmail.com</a><li>
											 </ul>

											 <p>Jay Letheby &copy; 2016.</p>
							 </div>
					 </div>
			 </div>
		 </div>

<!-- BOOSTRAP CORE JAVASCRIPT
			 ====================================================================================== -->
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
			 <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.3.js"></script>
			 <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
			 <script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
			 <!-- TypeKit Fonts -->
			 <script src="https://use.typekit.net/jze7bdo.js"></script>
			 <script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>
