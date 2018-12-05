<div class="col-md-12 image-slider" id="image-slider">
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
	<div class="item">
		<div class="padding-top-15"></div>
		<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="img-responsive resp-image">
		<h3><a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
	</div>
	<?php if($i == $no): ?>
    <?php endif; ?>	
	<?php } $i++; } ?>
	</div>
	</div>	