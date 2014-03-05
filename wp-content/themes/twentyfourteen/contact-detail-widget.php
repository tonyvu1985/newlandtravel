<?php
/**
 * Description: contact detail
 * Author: Tony Vu (vuductrung2003@gmail.com)
 */


add_action( 'widgets_init', 'register_contact_detail_widget' );

function register_contact_detail_widget() {
	register_widget( 'Contact_Detail_Widget' );
}

class Contact_Detail_Widget extends WP_Widget {

	function Contact_Detail_Widget() {
		$this->WP_Widget( 'Contact_Detail_Widget', __('Contact Detail', 'example'), $widget_ops, $control_ops );
	}
	
                                
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$name = $instance['name'];
                
                $detail = $instance['detail'];

                
		echo $before_widget;

		//Display the name 
		if ($name)
			echo $name;
		
                // Check if textarea is set
                if($detail) {
                      echo '<p>'.$detail.'</p>';
                }

		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['name'] = strip_tags( $new_instance['name']);            
                $instance['detail'] = strip_tags( $new_instance['detail'] );
		return $instance;
	}

	
	function form($instance){

		//Set up some default widget settings.
		$defaults = array('name' => __('Bilal Shaheen', 'example'), 'detail' => __('Contact Detail', 'example'));
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
                
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e('Your Name:', 'example'); ?></label>
			<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
		</p>

                
                <p>
                    <label for="<?php echo $this->get_field_id('detail'); ?>"><?php _e('Contact Detail', 'example'); ?></label><br/>
                    <textarea rows="4" style="width:100%;" id="<?php echo $this->get_field_id('detail'); ?>" name="<?php echo $this->get_field_name('detail'); ?>" value="<?php echo $instance['detail']; ?>"><?php echo $instance['detail']; ?></textarea>
                </p>
	<?php
	}
}

?>