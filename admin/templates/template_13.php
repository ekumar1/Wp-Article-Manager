<div class="news-wrapper">
    <div class="news-header">
		<h3 class="pull-left"><?php  $yourcat = get_category($cat_id);  echo $catname= $yourcat->name ; ?></h3>
		<a href="?cat=<?php echo $cat_id; ?>" class="pull-right">सबै </a>
		<div class="clearfix"></div>
	</div>
    <div class="row news-style-13">
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
			if($i<2){
	?>
	<div class="col-md-7">
        <img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=360&h=240" class="img-responsive resp-image">
        <h2><a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h2>
        <p class="text-justify">
            <?php echo get_excerpt(550); ?>...
        </p>
    </div>
	
	<div class="col-md-5">
        <ul class="list-group pmd-list pmd-list-avatar">
	<?php } else { ?>
		<li class="list-group-item">
            <div class="media-left">
                <a href="<?php the_permalink($post->ID); ?>" class="avatar-list-img">
                    <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=40&h=40" data-holder-rendered="true">
                </a>
            </div>
            <div class="media-body media-middle">
                <a href="<?php the_permalink($post->ID); ?>">
                    <?php echo get_the_title($post->ID); ?>
                </a>
            </div>
            <div class="clearfix"></div>
        </li>
	<?php if($i == $no): ?>
    <?php endif; ?>	
	<?php } $i++; } ?>
	</ul>
	</div>
	</div>	
	</div>
	</div>