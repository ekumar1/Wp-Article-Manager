<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://ekumar.com.np
 * @since      1.0.0
 *
 * @package    Ek_wp_article_manager
 * @subpackage Ek_wp_article_manager/admin/partials
 */
 


class wpb_widget extends WP_Widget {

 public function __construct() 
	       {
		
			 parent::__construct(
								// Base ID of your widget
								 'wpb_widget', 

								// Widget name will appear in UI
								__('News Box', 'wpb_widget_domain'), 

								// Widget description
								array( 'description' => __( 'News Box', 'wpb_widget_domain' ), ) 
			                    );
			} 			
	
	public function widget( $args, $instance ) {
			
		$title = apply_filters( 'widget_title', $instance['title'] );
		$list_num = apply_filters( 'widget_title', $instance['list_num'] );
		$css_theme = apply_filters( 'widget_title', $instance['css_theme'] );
		$catid = apply_filters( 'widget_title', $instance['catid'] );


		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		//echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		$cat_id= $catid; 
		$no = $list_num;   
 
		require plugin_dir_path(__DIR__) . "templates/template_$css_theme.php"; 
		 
		echo $args['after_widget'];
	}
		
	// Widget Backend 
	public function form( $instance ) 
	{
			if ( isset( $instance[ 'title' ] ) )
				{
					$title = $instance[ 'title' ];
					$list_num = $instance[ 'list_num' ];
					$css_theme = $instance[ 'css_theme' ];
					$catid = $instance[ 'catid' ];

				}
				
			else
				{
					$title = __( 'New title', 'wpb_widget_domain' );
				 }
				 
			 require plugin_dir_path(__DIR__) . "templates/template_config.php"; 
			 
	 }
		
		// Updating widget replacing old instances with new
		public function update( $new_instance, $old_instance ) {
			
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['list_num'] = ( ! empty( $new_instance['list_num'] ) ) ? strip_tags( $new_instance['list_num'] ) : '';
		$instance['css_theme'] = ( ! empty( $new_instance['css_theme'] ) ) ? strip_tags( $new_instance['css_theme'] ) : '';
		$instance['catid'] = ( ! empty( $new_instance['catid'] ) ) ? strip_tags( $new_instance['catid'] ) : '';

		return $instance;
		}
  
}
  
  // excerpt for content increase decrease

	function get_excerpt($count){

	  $permalink = get_permalink($post->ID);

	  $excerpt = get_the_content();

	  $excerpt = strip_tags($excerpt);

	  $excerpt = substr($excerpt, 0, $count);

	  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));

	  $excerpt = $excerpt.'..';

	  return $excerpt;

	}
	
	
			// Register and load the widget
			function wpb_load_widget()
				{
					 
					register_widget( 'wpb_widget' );
				}
				
			 add_action( 'widgets_init', 'wpb_load_widget' );
			 
			 
  ?>