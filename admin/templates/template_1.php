       <?php
		$args = array(
					  'showposts' => $no,
					  'order'    => 'desc',
					  'category' 	=> $cat_id
				      );
				$posts = get_posts($args);
				$i = 1;
				foreach ($posts as $post)
				{
					setup_postdata($post);
					
					if($i > 0)
					{
						?>
						<div class="col-md-12 breaking-news-each pmd-z-depth">
							<h1 class="text-center">
								<a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
								<div class="row"></div>
								
							</h1>
							<p class="text-center"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="img-responsive"></p>
							<p class="text-center font-16 padding-10">
								<?php echo the_content(); ?>....
							</p>
							<p class="text-center">
								<a href="<?php the_permalink($post->ID); ?>" class="btn btn-primary">पुरा पढ्नुहोस्</a>
							</p>
						</div>
					<?php 
					  if($i == $no): 
					  endif;  	
					  
					   } $i++; 
				 } 
	?> 