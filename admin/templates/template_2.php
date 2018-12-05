<div class="slider-wrapper">
    <div id="news-slider" class="owl-carousel">
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
			<h2 class="text-justify">
                <a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
            </h2>
            <!-- <small><i class="fa fa-clock-o"></i> <?php //echo time_ago(); ?></small> -->
			<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="img-responsive">
			<p class="text-justify">
				<?php echo get_excerpt(1350); ?>...
			</p>
		</div>

	<?php if($i == $no): ?>
    <?php endif; ?>
	<?php } $i++; } ?>	
</div>
</div>
</div>