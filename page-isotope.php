<?php
/*
Template Name: Main Work
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">
				    
                   	<section class="post_content clearfix" itemprop="articleBody">
                   	
                   		<h1 class="text-justify">Hello, my name is Cristina, and I am a Sacramento-based web professional.</h1>
						
                        <div id="isotopeContainer">

                            <?php query_posts(array( 'post_type' => array('portfolio'), 'posts_per_page' => 12 )); ?>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>							
							
								<div class="item <?php
								$my_terms = get_the_terms( $post->ID, 'custom_cat' );
								if( $my_terms && !is_wp_error( $my_terms ) ) {
								    foreach( $my_terms as $term ) {
								        echo $term->slug;
								    }
								}
								?>">

                            
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail('thumb-415'); ?>
								</a>
                            </div><!--.item-->
                       
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query() ?>
                            
                        </div><!-- #isotopeContainer -->  
                        
                        </section> 
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>