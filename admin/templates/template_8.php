<div class="news-wrapper">
	<div class="news-header">
		<h3 class="pull-left"><?php  $yourcat = get_category($cat_id);  echo $catname= $yourcat->name ; ?></h3>
		<a href="?cat=<?php echo $cat_id; ?>" class="pull-right">सबै </a>
		<div class="clearfix"></div>
	</div>
		<div class="row news-style-8">
		<?php
			$args = array(
				'showposts' => $no,
				'order'    => 'desc',
				'category' 	=> $cat_id
			);
			$posts = get_posts($args);	 
			$i = 1;
			foreach ($posts as $post){
				setup_postdata($post);?>
				<?php if($i==1){ ?>
					<div class="col-md-12 equal-height-content">
						<h3><a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
						<img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=555&h=250" class="img-responsive resp-image">
						<p class="text-justify font-16 padding-top-10">
							<?php echo get_excerpt(500); ?>...
						</p>
					</div>
				<?php } if($i>1) {?>
					<div class="col-md-4 equal-height-content">
						<h4><a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h4>
						<img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=360&h=240" class="img-responsive resp-image">
						<p class="text-justify font-16 padding-top-10">
							<?php echo get_excerpt(300); ?>...
						</p>
					</div>
				<?php if($i == $no): ?>
				<?php endif; ?>	
			<?php } $i++; } ?>
		</div>
	</div>
</div>