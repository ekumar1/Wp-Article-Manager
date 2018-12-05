<div class="news-wrapper">  
<div class="news-header">
		<h3 class="pull-left"><?php  $yourcat = get_category($cat_id);  echo $catname= $yourcat->name ; ?></h3>
		<a href="?cat=<?php echo $cat_id; ?>" class="pull-right">सबै </a>
		<div class="clearfix"></div>
	</div>
<div class="equal-height video-misc-slider" id="video-misc-slider">
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
	<div class="equal-height-content padding-15" id="item">
		<img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=360&h=240" class="img-responsive resp-image">
		<h3 class="text-center"><a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
	</div>
	<?php if($i == $no): ?>
    <?php endif; ?>	
	<?php } $i++; } ?>	
</div>
</div>
</div>