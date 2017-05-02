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
							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">
								<form action="//wordpress.us13.list-manage.com/subscribe/post?u=817e9ae19ff7148c87f94a39b&amp;id=b9fa4e4416" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								    <div id="mc_embed_signup_scroll">
										<div class="mc-field-group">
											<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="E-mail">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    
										<?php 
											/*
												real people should not fill this in and expect good things - 
												do not remove this or risk form bot signups
											*/
										?>
										<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_817e9ae19ff7148c87f94a39b_b9fa4e4416" tabindex="-1" value=""></div>
										<div class="clear subscribe-button">
											<input type="submit" value="S'abonner" name="subscribe" id="mc-embedded-subscribe" class="button">
										</div>
								    </div>
								</form>
							</div>
							<!--End mc_embed_signup-->
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
					<div class="pinterest-profile">
						<h2>Pinterest</h2>
						<a data-pin-do="embedUser" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://fr.pinterest.com/culturecherif/"></a>
						<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
					</div> <!-- .pinterest-profile -->
				</div><!-- .grid-container -->
			</div><!-- #secondary  {end widget area} -->
			<div class="footer-bottom-info">
				<div class="site-info">
					<span>&copy; Culture Cherifienne 2014 - <?=get_current_year(); ?> </span>
				</div><!-- .site-info -->
			</div><!-- .footer-bottom-info -->
		</footer><!-- #colophon -->

	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Custom child-theme js scripts -->
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
<script type='text/javascript'>
	(function($) {
		window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; /*
	 * Translated default messages for the $ validation plugin.
	 * Locale: FR
	 */
	$.extend(
		$.validator.messages, {
	        required: "Ce champ est requis.",
	        remote: "Veuillez remplir ce champ pour continuer.",
	        email: "Veuillez entrer une adresse email valide.",
	        url: "Veuillez entrer une URL valide.",
	        date: "Veuillez entrer une date valide.",
	        dateISO: "Veuillez entrer une date valide (ISO).",
	        number: "Veuillez entrer un nombre valide.",
	        digits: "Veuillez entrer (seulement) une valeur numérique.",
	        creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
	        equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
	        accept: "Veuillez entrer une valeur avec une extension valide.",
	        maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
	        minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
	        rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
	        range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
	        max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
	        min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
		}
	);}(jQuery));
	var $mcj = jQuery.noConflict(true);
</script>

</body>
</html>
