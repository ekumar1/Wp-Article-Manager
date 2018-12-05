<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php $yourcat = get_category($catid);  echo $catname= $yourcat->name; ?>" />


			<?php
					$cat_lists = get_categories(array('type' => 'post', 'hide_empty' => 0, 'orderby' => 'name', 'order' => 'ASC', 'taxonomy' => 'category'));

			?>

			<p> <!-- Category -->
					<label for="<?php echo $this->get_field_id('catid'); ?>"><?php _e('Category: ', $wp_cat_list_itg_tans); ?></label>
					<select id="<?php echo $this->get_field_id('catid'); ?>" name="<?php echo  $this->get_field_name('catid'); ?>">
						  
							  <option value="<?php echo esc_attr( $catid ); ?>"><?php $yourcat = get_category($catid);  echo $catname= $yourcat->name; ?></option>

							<?php
					foreach($cat_lists as $cat_list) {
						?>
						<option value="<?php echo $cat_list->term_id; ?>"<?php if($cat_list->term_id == $cat_id) { ?> selected="selected"<?php } ?>><?php echo $cat_list->name.' ('.$cat_list->count.')'; ?> - <?php echo $cat_list->term_id; ?></option>
						<?php
					}
					?>
					</select>
				</p>
				
				 <p><!-- CSS Theme -->
					<label for="<?php echo $this->get_field_id('css_theme'); ?>">News Box Style</label>
					<select id="<?php echo $this->get_field_id('css_theme'); ?>" name="<?php echo $this->get_field_name('css_theme'); ?>">
						<option value="<?php echo esc_attr( $css_theme ); ?>"> Style - <?php echo esc_attr( $css_theme ); ?></option>
						<option value="1">Breaking News (Style 1)</option>                  
						<option value="2">Main Slider (style 2)</option>
						<option value="3">Title Top, Image Left Content Right (style 3)</option> 
						<option value="4">2 Col - First Image,Title & Content, Second Title,Image & Content (style 4)</option>
						<option value="5">Title Image Content + Title And Content (style 5)</option>   
						<option value="6">2 Cols Title Image Content + 3 Cols Title And Content (style 6)</option>   
						<option value="7">Title Image Content + Image Left Title Right (style 7)</option>   
						<option value="8">Title Image Content + 3 Cols Title And Content (style 8)</option>   
						<option value="9">Posts Slider (style 9)</option>   
						<option value="10">Main, Popular News Tabs (style 10)</option>   
						<option value="11">Style 5 No Minimax</option>   
						<option value="12">Left Circle Image And Title</option>   
						<option value="13">2 Column - Image Title Content ,  Circle List</option>   
						<option value="14">Title Lists</option>
					<option value="15">Image Slider</option>
					<option value="16">News Paper</option>   
					</select>
				</p>
				   
				   
				   <p> <!-- Number | Comment -->
					<label for="<?php echo $this->get_field_id('list_num'); ?>"><?php _e('Number of Posts to show: &raquo;', $wp_cat_list_itg_tans); ?></label>
					<input type="text" name="<?php echo $this->get_field_name('list_num'); ?>" id="<?php echo $this->get_field_id('list_num'); ?>" class="small-text code" value="<?php echo $list_num; ?>" />
					
					</p>



			</p>