<div class="tabs-wrapper">
    <div class="dropdown-tab">
        <div class="pmd-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home-dropdown" aria-controls="home" role="tab" data-toggle="tab">प्रमुख समाचार</a></li>
                <li role="presentation"><a href="#about-dropdown" aria-controls="about" role="tab" data-toggle="tab">धेरै पढिएको</a></li>
            </ul>
        </div>
        <div class="pmd-card-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home-dropdown">
                    <div class="news-wrapper">
                    <?php
						$args = array(
							'posts_per_page'         => '3',
							'order'                  => 'DESC',
							'orderby'                => 'date'
						);
						$query = new WP_Query( $args );
						  if ( $query->have_posts() ) {
						    while ( $query->have_posts() ) {
						      $query->the_post();
					?>
                        <div class="tab-news">
	                        	<a href="<?php the_permalink($post->ID); ?>" class="pull-left"><?php echo get_the_title($post->ID); ?></a>
	                        	<div class="clearfix"></div>
	                            <img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=150&h=100" class="pull-left">
	                            <p><?php echo get_excerpt(450); ?></p>
                        </div>
                    <?php
						}
						} 
						wp_reset_postdata(); 
					?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane pmd-scrollbar mCustomScrollbar" id="about-dropdown">
                    <div class="news-wrapper">
                        <?php
							query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&order=DESC');
							if (have_posts()) : while (have_posts()) : the_post();
						?>
                        <div class="tab-news">
	                        	<a href="<?php the_permalink($post->ID); ?>" class="pull-left"><?php echo get_the_title($post->ID); ?></a>
	                        	<div class="clearfix"></div>
	                            <img src="<?php bloginfo("url"); ?>/resize.php?src=<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>&w=150&h=100" class="pull-left">
	                            <p><?php echo get_excerpt(450); ?></p>
                        </div>
	                    <?php
						endwhile; endif;
						wp_reset_query();
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>