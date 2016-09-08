<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

	<div class="projectNav">
		<div class="prev-link"><?php previous_post('%', '&laquo; Previous Project', 'no'); ?></div>    	
		<div class="next-link"><?php next_post('%', 'Next Project &raquo;', 'no'); ?></div>
	</div>
	<hr />  

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php  if((get_post_meta($post->ID, "About", true))) { ?>		
			<?php 
				echo '<h4 class="widgettitle">About the Project</h4>';
				echo get_post_meta($post->ID, 'About', true); 
			?>
		<?php } ?>

		<?php  if((get_post_meta($post->ID, "Testimonial", true))) { ?>
			<?php 
			echo '<h4 class="widgettitle">What the Client Said</h4>';
			echo get_post_meta($post->ID, 'Testimonial', true); ?>
		<?php } ?>
	
		<h4 class="widgettitle">Details</h4>
		<ul>
		<li><?php _e("<strong>Released:</strong>", "bonestheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time></li>
		<li><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title"><strong>Role:</strong></span> ', ', ' ) ?></li>
		<li><?php _e("<strong>Project:</strong>", "bonestheme"); ?> <?php echo get_the_term_list( get_the_ID(), 'custom_cat', "" ) ?></li>
		</ul>
		
		<?php  if((get_post_meta($post->ID, "URL", true))) { ?>
			<?php
			echo '<p><a href="';
			echo get_post_meta($post->ID, 'URL', true);
			echo '" title="<?php the_title(); ?>" target="_blank" class="button">View live site &raquo;</a></p>'
			?>
		<?php } ?>
		
	<?php endwhile; else : endif; ?>				
</div>