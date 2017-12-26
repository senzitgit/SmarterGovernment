<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fabframe
 */
?>

	</div><!-- #content -->
	<?php if (!is_front_page()){ ?>
		<div id="bottom">
			<div class="container"> <div class="row">
				<?php if ( !function_exists('dynamic_sidebar')
				        || !dynamic_sidebar("Footer") ) : ?>  
				<?php endif; ?>
			</div></div>
		</div>
	<?php } ?>
	<footer id="colophon" class="site-footer" role="contentinfo" style="margin-top:30px;bottom :0 !important;">
		<div class="container"><div class="row" > 
			<div class="site-info clearfix" >
				<div class="fcred  col-md-6" >
					© 2008- 2016 SenzIT Corporation. All Rights Reserved
				</div>	
				
				<div class="fcredr col-md-6">
							
				</div>	
				
			</div><!-- .site-info -->
		</div></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>