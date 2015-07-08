<?php
	   class social_widget extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'social_widget', // Base ID
				__('Social Icons', 'text_domain'), // Name
				array( 'description' => __( 'Shows the social icons', 'text_domain' ), ) // Args
			);
		}
	
		public function widget( $args, $instance ) { ?>
			<?php echo $args['before_widget']; ?>
			<p class="text-center social-icons">
            	<a href="http://twitter.com/LisaGillPhoto"><i class="fa fa-twitter fa-2x"></i></a> 
                <a href="http://www.facebook.com/LisaGillPhotographyStudio"><i class="fa fa-facebook fa-2x"></i></a> 
                <a href="https://pinterest.com/lisagillphoto/"><i class="fa fa-pinterest fa-2x"></i></a>
            </p>            
            <?php echo $args['after_widget']; ?>
        <?php
		}
	
		public function form( $instance ) {
		?>
            <p>There are no options for this widget.</p>
        <?php
		}
	
		public function update( $new_instance, $old_instance ) {
			
		}
	}