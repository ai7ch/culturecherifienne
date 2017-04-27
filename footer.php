<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="widget-area" role="complementary">
				<div class="grid-container">
					<div class="search-social-subscribe">
						<?php 
							the_widget('WP_Widget_Search',array('title'=>'Recherche'));
						?><!-- #search-box -->
						<aside id="wpcom_social_media_icons_widget-3" class="widget widget_wpcom_social_media_icons_widget">
							<h3 class="widget-title">Suivez-moi!</h3>
							<ul>
								<li>
									<a href="https://www.facebook.com/Culture-Chérifienne-629853133756169/" class="genericon genericon-facebook" target="_blank"><span class="screen-reader-text">Voir le profil de Culture-Chérifienne-629853133756169 sur Facebook</span></a>
								</li>
								<li>
									<a href="https://twitter.com/culture_cherif/" class="genericon genericon-twitter" target="_blank"><span class="screen-reader-text">Voir le profil de culture_cherif sur Twitter</span></a>
								</li>
								<li>
									<a href="https://www.instagram.com/culture.cherifienne/" class="genericon genericon-instagram" target="_blank"><span class="screen-reader-text">Voir le profil de culture.cherifienne sur Instagram</span></a>
								</li>
								<li>
									<a href="https://www.pinterest.com/culturecherif/" class="genericon genericon-pinterest" target="_blank"><span class="screen-reader-text">Voir le profil de culturecherif sur Pinterest</span></a>
								</li>
							</ul>
						</aside> <!-- #wpcom_social_media_icons_widget -->
						<div class="subscribe widget">
							<h3 class="widget-title">Abonnez-vous à culture chérifienne</h3>
							<?php echo do_shortcode('[wysija_form id="1"]'); ?>
						</div> <!-- .subscribe -->
					</div> <!-- .search-social-subscribe -->
					<?php 
						the_widget('WP_Widget_Recent_Posts',array(
							'title'		=>	'Articles récents',
							'number'	=>	5
						)) 
					?> <!-- .article-recents -->
					<div class="archive-categories">
						<?php 
							the_widget('WP_Widget_Categories',array(
								'title'		=>	'Catégories',
								'dropdown'	=>	1
							));
						?> <!-- .categories -->
						<?php 
							the_widget('WP_Widget_Archives',array(
								'title'		=>	'Archives',
								'dropdown'	=>	1
							));
						?> <!-- .archives -->
					</div> <!-- .archive-categories -->
					
				</div><!-- .grid-container -->
			</div><!-- #secondary  {end widget area} -->
			<div class="footer-bottom-info">
				<div class="site-info">
					<span>&copy; Culture Cherifienne 2015 - 2017 </span>
					<span class="sep"> | </span>
					<?php echo "CGU" ?>
				</div><!-- .site-info -->
			</div><!-- .footer-bottom-info -->
		</footer><!-- #colophon -->

	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
