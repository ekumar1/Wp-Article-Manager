<div class="news-wrapper">
    <div class="news-header">
		<h3 class="pull-left"><?php  $yourcat = get_category($cat_id);  echo $catname= $yourcat->name ; ?></h3>
		<a href="?cat=<?php echo $cat_id; ?>" class="pull-right">सबै </a>
		<div class="clearfix"></div>
	</div>
	<div class="news-style-14">
<ul class="list-group pmd-list pmd-list-avatar">
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
	<li class="list-group-item">
        <div class="media-body">
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