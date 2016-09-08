<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
					<h1>Epic 404 - Page Not Found</h1>
					

					<section class="entry-content clearfix">
						<p>This isn't the page you're looking for.</p>
						
						<p><a href="http://www.flickr.com/photos/st3f4n/3951143570/" title="The droids we're googling for by StŽfan, on Flickr" target="_blank"><img src="http://farm3.staticflickr.com/2465/3951143570_20b4eccd3f_n.jpg" width="320" height="213" alt="The droids we're googling for"></a></p>
								
						<p>Here are your options:</p>
			
						<ul>
						<li>You can search the site using the form provided below.</li>
						<li>You can visit <a href="<?php bloginfo('url'); ?>/">the homepage</a></li>
						<li>Or you can visit <a href="<?php bloginfo('url'); ?>/sitemap">the sitemap</a></li>
						</ul>
			
						<h2>Search Lovely Geek</h2>
						<?php get_search_form(); ?>
					
						</section> <!-- end section -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
				
				<?php get_sidebar(); ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
