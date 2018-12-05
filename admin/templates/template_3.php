<?php
		$args = array(
			'showposts' => $no,
			 'order'    => 'desc',
			'category' 	=> $cat_id
		);
		$posts = get_posts($args);	 
		$i = 1;
		foreach ($posts as $post){
			setup_postdata($post);
			if($i>0){
	?>
	<div class="col-md-12">
		<h3><a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
	</div>
	<div class="col-xs-4 image-holder">
		<img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=100&h=67" class="img-responsive resp-image">
	</div>
	<div class="col-xs-8 news-contents">
		<p class="text-justify">
			<?php echo get_excerpt(300); ?>...
		</p>
	</div>
	<div class="clearfix"></div>
	<?php if($i == $no): ?>
    <?php endif; ?>	
	<?php } $i++; } ?>
	</div>