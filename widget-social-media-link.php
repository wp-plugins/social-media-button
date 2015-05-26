<?php
class SMButtonsWidget extends WP_Widget {

	public function __construct() {
        parent::__construct(
            'sm_buttons_widget',
            __('Social Media Buttons', 'smbuttons' ),
            array( 'description' => __( 'A widget that displays various social media button at Wordpress widgets area.', 'smbuttons' ), )
        );

	    add_action( 'wp_footer', array( $this, 'custom_style' ) );
    }// end constructor

	function widget( $args, $instance ) {
		// Widget output
	    extract( $args );
	 
	    /* Our variables from the widget settings. */
	    $this->widget_title = apply_filters('widget_title', $instance['title'] );

	    $this->fb_url 		= 	$instance['fb_url'];
	    $this->gp_url 		=	$instance['gp_url'];
	    $this->in_url 		=	$instance['in_url'];
	    $this->t_url 		=	$instance['t_url'];
	    $this->y_url 		=	$instance['y_url'];
	    $this->pin_url 		=	$instance['pin_url'];
	    $this->git_url 		=	$instance['git_url'];


	    $this->codepen 		=	$instance['codepen'];
	    $this->digg 		=	$instance['digg'];
	    $this->dribbble 	=	$instance['dribbble'];
	    $this->dropbox 		=	$instance['dropbox'];
	    $this->flickr 		=	$instance['flickr'];
	    $this->foursquare 	=	$instance['foursquare'];
	    $this->instagram 	=	$instance['instagram'];
	    $this->pinterest 	=	$instance['pinterest'];
	    $this->reddit 		=	$instance['reddit'];
	    $this->vimeo 		=	$instance['vimeo'];
	    $this->wordpress 	=	$instance['wordpress'];

	    $this->email 	=	$instance['email'];

	    $this->icon_color 			=	$instance['icon_color'];
	    $this->icon_hover_color 	=	$instance['icon_hover_color'];
	    $this->icon_bg_color 		=	$instance['icon_bg_color'];
	    $this->icon_hover_bg_color 	=	$instance['icon_hover_bg_color'];

	   	//Display Sidebar
	   	echo $before_widget;

		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;
	    ?>
	        <div class="widget-content">
	        	<?php if ( !empty($this->fb_url) ): ?>
	        		<a class="facebook" title="Facebook" target="_blank" href="<?php echo $this->fb_url ?>"><i class="fa fa-facebook"></i></a>
	        	<?php endif; ?>

	        	<?php if ( !empty($this->gp_url) ): ?>
	        		<a title="Google+" target="_blank" href="<?php echo $this->gp_url ?>"><i class="fa fa-google-plus"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->in_url) ): ?>
	        		<a title="LinkedIn" target="_blank" href="<?php echo $this->in_url ?>"><i class="fa fa-linkedin"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->t_url) ): ?>
	        		<a title="Twitter" target="_blank" href="<?php echo $this->t_url ?>"><i class="fa fa-twitter"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->y_url) ): ?>
	        		<a title="Youtube" target="_blank" href="<?php echo $this->y_url ?>"><i class="fa fa-youtube"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->pin_url) ): ?>
	        		<a title="Pinterest" target="_blank" href="<?php echo $this->pin_url ?>"><i class="fa fa-pinterest"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->git_url) ): ?>
	        		<a title="GitHub" target="_blank" href="<?php echo $this->git_url ?>"><i class="fa fa-github"></i></a>
				<?php endif; ?>
				<!-- New Options-->
	        	<?php if ( !empty($this->codepen) ): ?>
	        		<a title="Codepen" target="_blank" href="<?php echo $this->codepen ?>"><i class="fa fa-codepen"></i></a>
				<?php endif; ?>
				
	        	<?php if ( !empty($this->digg) ): ?>
	        		<a title="Digg" target="_blank" href="<?php echo $this->digg ?>"><i class="fa fa-digg"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->dribbble) ): ?>
	        		<a title="Dribbble" target="_blank" href="<?php echo $this->dribbble ?>"><i class="fa fa-dribbble"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->dropbox) ): ?>
	        		<a title="Dropbox" target="_blank" href="<?php echo $this->dropbox ?>"><i class="fa fa-dropbox"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->flickr) ): ?>
	        		<a title="Flickr" target="_blank" href="<?php echo $this->flickr ?>"><i class="fa fa-flickr"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->foursquare) ): ?>
	        		<a title="Foursquare" target="_blank" href="<?php echo $this->foursquare ?>"><i class="fa fa-foursquare"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->instagram) ): ?>
	        		<a title="Instagram" target="_blank" href="<?php echo $this->instagram ?>"><i class="fa fa-instagram"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->pinterest) ): ?>
	        		<a title="Pinterest" target="_blank" href="<?php echo $this->pinterest ?>"><i class="fa fa-pinterest"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->reddit) ): ?>
	        		<a title="Reddit" target="_blank" href="<?php echo $this->reddit ?>"><i class="fa fa-reddit"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->vimeo) ): ?>
	        		<a title="Vimeo" target="_blank" href="<?php echo $this->vimeo ?>"><i class="fa fa-vimeo-square"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->wordpress) ): ?>
	        		<a title="WordPress" target="_blank" href="<?php echo $this->wordpress ?>"><i class="fa fa-wordpress"></i></a>
				<?php endif; ?>

	        	<?php if ( !empty($this->email) ): ?>
	        		<a href="mailto:<?php echo $this->email ?>"><i class="fa fa-envelope"></i></a>
				<?php endif; ?>
	        </div>
	    <?php
		echo $after_widget;
	}

	public function custom_style(){
		ob_start();
		?>
		<style>
			.widget_sm_buttons_widget .widget-content {margin: 20px 0;}
			.widget_sm_buttons_widget a {background: <?php echo $this->icon_bg_color; ?>;border-radius: 50px;padding: 10px;}
			.widget_sm_buttons_widget a.facebook {padding: 10px 15px;}
			.widget_sm_buttons_widget a:hover {background: <?php echo $this->icon_hover_bg_color; ?>;-webkit-transition: all 1s;transition: all 1s;}
			.widget_sm_buttons_widget a:hover i {color: <?php echo $this->icon_hover_color; ?>;-webkit-transition: all 1s;transition: all 1s;}
			.widget_sm_buttons_widget i {color: <?php echo $this->icon_color; ?>;font-size: 20px;line-height: 50px;vertical-align: middle;}
		</style>
		<?php
		$custom_style = ob_get_clean();
		echo $custom_style;
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
	    $instance = $old_instance;
	 
	    /* Strip tags for title and name to remove HTML (important for text inputs). */
	    $instance['title'] = strip_tags( $new_instance['title'] );
	    
	    $instance['fb_url'] = esc_url_raw( $new_instance['fb_url'] );
	    $instance['gp_url'] = esc_url_raw( $new_instance['gp_url'] );
	    $instance['in_url'] = esc_url_raw( $new_instance['in_url'] );
	    $instance['t_url'] = esc_url_raw( $new_instance['t_url'] );
	    $instance['y_url'] = esc_url_raw( $new_instance['y_url'] );
	    $instance['pin_url'] = esc_url_raw( $new_instance['pin_url'] );
	    $instance['git_url'] = esc_url_raw( $new_instance['git_url'] );

	    $instance['codepen'] = esc_url_raw( $new_instance['codepen'] );
	    $instance['digg'] = esc_url_raw( $new_instance['digg'] );
	    $instance['dribbble'] = esc_url_raw( $new_instance['dribbble'] );
	    $instance['dropbox'] = esc_url_raw( $new_instance['dropbox'] );
	    $instance['flickr'] = esc_url_raw( $new_instance['flickr'] );
	    $instance['foursquare'] = esc_url_raw( $new_instance['foursquare'] );
	    $instance['instagram'] = esc_url_raw( $new_instance['instagram'] );
	    $instance['pinterest'] = esc_url_raw( $new_instance['pinterest'] );
	    $instance['reddit'] = esc_url_raw( $new_instance['reddit'] );
	    $instance['vimeo'] = esc_url_raw( $new_instance['vimeo'] );
	    $instance['wordpress'] = esc_url_raw( $new_instance['wordpress'] );

	    $instance['email'] = sanitize_email( $new_instance['email'] );

	    $instance['icon_color'] = sanitize_text_field( $new_instance['icon_color'] );
	    $instance['icon_hover_color'] = sanitize_text_field( $new_instance['icon_hover_color'] );
	    $instance['icon_bg_color'] = sanitize_text_field( $new_instance['icon_bg_color'] );
	    $instance['icon_hover_bg_color'] = sanitize_text_field( $new_instance['icon_hover_bg_color'] );

	    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form	    
		/* Set up some default widget settings. */
	    $defaults = array(
	        'title' 				=> '',
	        'fb_url' 				=> '',
	        'gp_url' 				=> '',
	        'in_url' 				=> '',
	        't_url' 				=> '',
	        'y_url' 				=> '',
	        'pin_url' 				=> '',
	        'git_url' 				=> '',

	        'codepen' 				=> '',
	        'digg' 					=> '',
	        'dribbble' 				=> '',
	        'dropbox' 				=> '',
	        'flickr' 				=> '',
	        'foursquare' 			=> '',
	        'instagram' 			=> '',
	        'pinterest' 			=> '',
	        'reddit' 				=> '',
	        'vimeo' 				=> '',
	        'wordpress' 			=> '',
	        'email' 				=> '',

	        'icon_color' 			=> '#000000',
	        'icon_hover_color' 		=> '#dddddd',
	        'icon_bg_color' 		=> '#00fd00',
	        'icon_hover_bg_color' 	=> '#ff0000',
	    );
	 
	    $instance = wp_parse_args( (array) $instance, $defaults );
		?>	    
		<!-- Widget Title: Text Input -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'smbuttons') ?></label>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
	    </p>
		<!-- Show Facebook: Checkbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'fb_url' ); ?>"><?php _e('Facebook', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'fb_url' ); ?>" name="<?php echo $this->get_field_name( 'fb_url' ); ?>" value="<?php echo $instance['fb_url']; ?>" placeholder="http://facebook.com/name" />
	    </p>
		<!-- Show Google Plug: Checkbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'gp_url' ); ?>"><?php _e('Google Plus', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'gp_url' ); ?>" name="<?php echo $this->get_field_name( 'gp_url' ); ?>" value="<?php echo $instance['gp_url']; ?>" placeholder="https://plus.google.com/+userid" />
	    </p>
		<!-- Show LinkedIn: Checkbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'in_url' ); ?>"><?php _e('LinkedIn', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'in_url' ); ?>" name="<?php echo $this->get_field_name( 'in_url' ); ?>" value="<?php echo $instance['in_url']; ?>" placeholder="https://www.linkedin.com/in/user" />
	    </p>
		<!-- Show Twitter: Checkbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 't_url' ); ?>"><?php _e('Twitter', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 't_url' ); ?>" name="<?php echo $this->get_field_name( 't_url' ); ?>" value="<?php echo $instance['t_url']; ?>" placeholder="https://twitter.com/username" />
	    </p>
		<!-- Show Youtube: Checkbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'y_url' ); ?>"><?php _e('Youtube', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'y_url' ); ?>" name="<?php echo $this->get_field_name( 'y_url' ); ?>" value="<?php echo $instance['y_url']; ?>" placeholder="https://www.youtube.com/user/username" />
	    </p>
		<!-- Show Pinterest: Checkbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'pin_url' ); ?>"><?php _e('Pinterest', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'pin_url' ); ?>" name="<?php echo $this->get_field_name( 'pin_url' ); ?>" value="<?php echo $instance['pin_url']; ?>" placeholder="http://www.pinterest.com/username" />
	    </p>
		<!-- Show GitHub -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'git_url' ); ?>"><?php _e('GitHub', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'git_url' ); ?>" name="<?php echo $this->get_field_name( 'git_url' ); ?>" value="<?php echo $instance['git_url']; ?>" placeholder="https://github.com/username" />
	    </p>
		<!-- Show codepen -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'codepen' ); ?>"><?php _e('Codepen', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'codepen' ); ?>" name="<?php echo $this->get_field_name( 'codepen' ); ?>" value="<?php echo $instance['codepen']; ?>" placeholder="http://codepen.io/username" />
	    </p>
		<!-- Show digg -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'digg' ); ?>"><?php _e('digg', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'digg' ); ?>" name="<?php echo $this->get_field_name( 'digg' ); ?>" value="<?php echo $instance['digg']; ?>" placeholder="" />
	    </p>
		<!-- Show dribbble -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('dribbble', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" placeholder="http://dribbble.com/username" />
	    </p>
		<!-- Show dropbox -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'dropbox' ); ?>"><?php _e('dropbox', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'dropbox' ); ?>" name="<?php echo $this->get_field_name( 'dropbox' ); ?>" value="<?php echo $instance['dropbox']; ?>" placeholder="" />
	    </p>
		<!-- Show flickr -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('flickr', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" placeholder="http://www.flickr.com/photos/username" />
	    </p>
		<!-- Show foursquare -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'foursquare' ); ?>"><?php _e('foursquare', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'foursquare' ); ?>" name="<?php echo $this->get_field_name( 'foursquare' ); ?>" value="<?php echo $instance['foursquare']; ?>" placeholder="https://foursquare.com/username" />
	    </p>
		<!-- Show instagram -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('instagram', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" placeholder="http://instagram.com/username" />
	    </p>
		<!-- Show pinterest -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('pinterest', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" placeholder="http://pinterest.com/username" />
	    </p>
		<!-- Show reddit -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'reddit' ); ?>"><?php _e('reddit', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'reddit' ); ?>" name="<?php echo $this->get_field_name( 'reddit' ); ?>" value="<?php echo $instance['reddit']; ?>" placeholder="" />
	    </p>
		<!-- Show vimeo -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('vimeo', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" placeholder="https://vimeo.com/username" />
	    </p>
		<!-- Show wordpress -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('wordpress', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" placeholder="https://profiles.wordpress.org/username" />
	    </p>
		<!-- Show email -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e('email', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>" placeholder="mail@example.com" />
	    </p>
		<!-- Show Icon Color: Checkbox -->
	    <p>
	    	<input type="text" class="icon_color" id="<?php echo $this->get_field_id( 'icon_color' ); ?>" name="<?php echo $this->get_field_name( 'icon_color' ); ?>" value="<?php echo $instance['icon_color']; ?>" data-default-color="#000000">
	    	<label for="<?php echo $this->get_field_id( 'icon_color' ); ?>"><?php _e('Icon Color', 'smbuttons') ?></label>
	    </p>
		<!-- Show Icon Background Color: Checkbox -->
	    <p>	    
	    	<input type="text" class="icon_bg_color" id="<?php echo $this->get_field_id( 'icon_bg_color' ); ?>" name="<?php echo $this->get_field_name( 'icon_bg_color' ); ?>" value="<?php echo $instance['icon_bg_color']; ?>" data-default-color="#00fd00">
	    	<label for="<?php echo $this->get_field_id( 'icon_bg_color' ); ?>"><?php _e('Icon Background Color', 'smbuttons') ?></label>
	    </p>
		<!-- Show Icon Color: Checkbox -->
	    <p>
	    	<input type="text" class="icon_hover_color" id="<?php echo $this->get_field_id( 'icon_hover_color' ); ?>" name="<?php echo $this->get_field_name( 'icon_hover_color' ); ?>" value="<?php echo $instance['icon_hover_color']; ?>" data-default-color="#dddddd">
	    	<label for="<?php echo $this->get_field_id( 'icon_hover_color' ); ?>"><?php _e('Icon Color on Hover', 'smbuttons') ?></label>
	    </p>
		<!-- Show Icon Background Color: Checkbox -->
	    <p>	    
	    	<input type="text" class="icon_hover_bg_color" id="<?php echo $this->get_field_id( 'icon_hover_bg_color' ); ?>" name="<?php echo $this->get_field_name( 'icon_hover_bg_color' ); ?>" value="<?php echo $instance['icon_hover_bg_color']; ?>" data-default-color="#ff0000">
	    	<label for="<?php echo $this->get_field_id( 'icon_hover_bg_color' ); ?>"><?php _e('Icon Background Color on Hover', 'smbuttons') ?></label>
	    </p>
	    <?php
	}
}

function social_media_button_widget() {
	register_widget( 'SMButtonsWidget' );
}

add_action( 'widgets_init', 'social_media_button_widget' );
