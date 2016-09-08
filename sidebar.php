<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
	<?php if ((is_page('about')) or (is_page('contact'))) { ?>
		<h4 class="widgettitle">Social</h4>
		<a href="http://be.net/lovelygeek" title="lovelygeek on behance" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/behance.png" alt="lovelygeek on behance" class="social" /></a>
		<a href="http://www.box.com/profile/374853" title="cristina on box" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/box.png" alt="cristina on box" class="social" /></a>
		<a href="http://delicious.com/darthcena/" title="darthcena on delicious" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/delicious.png" alt="darthcena on delicious" class="social" /></a>
		<a href="http://darth-cena.deviantart.com/" title="darth-cena on deviant art" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/deviantart.png" alt="darth-cena on deviant art" class="social" /></a>
		<a href="http://dribbble.com/LovelyGeek" title="lovelygeek on dribbble" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/dribbble.png" alt="" class="social" /></a>
		<a href="http://www.etsy.com/people/darthcena" title="darthcena on etsy" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/etsy.png" alt="" class="social" /></a>
		<a href="http://www.facebook.com/lovelygeek" title="lovelygeek on facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" alt="" class="social" /></a>
		<a href="http://www.flickr.com/photos/darth_cena/" title="darth_cena on flickr" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/flickr.png" alt="" class="social" /></a>
		<a href="http://forrst.com/people/lovelygeek" title="lovelygeek on forrst" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/forrst.png" alt="" class="social" /></a>
		<a href="http://foursquare.com/lovelygeek" title="lovelygeek on foursquare" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/foursquare.png" alt="" class="social" /></a>
		<a href="http://plus.google.com/104490952671809548007/posts" title="cenamaria2787 on google+" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/googleplus.png" alt="" class="social" /></a>
		<a href="http://instagram.com/lovely_geek" title="lovely_geek on instagram" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.png" alt="" class="social" /></a>
		<a href="http://www.krop.com/cristinaassenza/" title="cristinaassenza on krop" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/krop.png" alt="" class="social" /></a>
		<a href="http://www.last.fm/user/cenamaria" title="cenamaria on last.fm" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/lastfm.png" alt="" class="social" /></a>
		<a href="http://www.linkedin.com/in/lovelygeek" title="lovelygeek on linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin.png" alt="" class="social" /></a>
		<a href="http://www.pandora.com/profile/cenamaria2787" title="cenamaria2787 on pandora" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/pandora.png" alt="" class="social" /></a>
		<a href="http://pinterest.com/lovelygeek/" title="lovelygeek on pinterest" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/pinterest.png" alt="" class="social" /></a>
		<a href="http://feeds.feedburner.com/lovelygeek" title="subscribe via feedburner" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/rss.png" alt="" class="social" /></a>
		<a href="http://technorati.com/people/darthcena" title="darthcena on technorati" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/technorati.png" alt="" class="social" /></a>
		<a href="http://twitter.com/LovelyGeek" title="lovelygeek on twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" alt="" class="social" /></a>
		<a href="http://www.vimeo.com/lovelygeek" title="lovelygeek on vimeo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/vimeo.png" alt="" class="social" /></a>
		<a href="http://zerp.ly/lovelygeek" title="lovelygeek on zerply" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/zerply.png" alt="" class="social" /></a>		
		
		

		<h4 class="widgettitle">Elsewhere</h4>
		<ul>
		<li><a href="http://digitalgear.com" target="_blank">Digital Gear</a> - where I work full time</li>
		<li><a href="http://interiors.lovelygeek.net" target="_blank">Lovely Interiors</a> - my interior design blog</li>
		<li><a href="http://wedding.lovelygeek.net" target="_blank">Joshua &amp; Cristina</a> - my wedding site</li>
		</ul>
		
		<h4 class="widgettitle">Colophon</h4>
		This site was built on my lovely 15" <a href="http://apple.com" target="_blank">Apple MacBook Pro</a> using the <a href="http://adobe.com" target="_blank">Adobe</a>&reg; Creative Suite, <a href="http://panic.com/coda/" target="_blank">Coda</a>, <a href="http://panic.com/Transmit/" target="_blank">Transmit</a>, and <a href="http://google.com/chrome">Google Chrome</a>. It is powered by <a href="http://wordpress.org" target="_blank">WordPress</a> and hosted at <a href="http://dreamhost.com" target="_blank">DreamHost</a>.
	<?php } ?>



<?php if ((is_home()) or (is_single()) or (is_archive())  or (is_search()) or (is_page('archive'))) { ?>
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
		
		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
		</div>

	<?php endif; ?>
<?php } ?>
</div>