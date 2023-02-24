<?php
/**
 * Parent module (module which has module item / child module) with FULL builder support
 * This module appears on Visual Builder and requires react component to be provided
 * Due to full builder support, all advanced options (except button options) are added by default
 *
 * @since 1.0.0
 */
class MenuSliderParent extends ET_Builder_Module {
	// Module slug (also used as shortcode tag)
	public $slug       = 'menu_slider_parent';

	// Full Visual Builder support
	public $vb_support = 'on';

	// Module item's slug
	public $child_slug = 'menu_slider_child';

	/**
	 * Module properties initialization
	 *
	 * @since 1.0.0
	 */


	function init() {
		// Module name
		$this->name = esc_html__( 'Menu Slider', 'menu-slider' );

		// Module Icon
		// Load customized svg icon and use it on builder as module icon. If you don't have svg icon, you can use
		// $this->icon for using etbuilder font-icon. (See CustomCta / DICM_CTA class)
		$this->icon_path =  plugin_dir_path( __FILE__ ) . 'icon.svg';

		$this->child_item_text	= esc_html__( 'Slider', 'menu-slider' );

		
	}

	/**
	 * Module's specific fields
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	
	 public function get_fields() {
	


		return array(
			
			'title'                 => array(
				'label'           => esc_html__( 'Title', 'menu-slider' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'menu-slider' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	/**
	 * Module's advanced fields configuration
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	

	/**
	 * Render module output
	 *
	 * @since 1.0.0
	 *
	 * @param array  $attrs       List of unprocessed attributes
	 * @param string $content     Content being processed
	 * @param string $render_slug Slug of module that is used for rendering output
	 *
	 * @return string module's rendered output
	 */
	function render( $attrs, $content = null, $render_slug ) {

		$title = $this->props['title'];
		// Render module content
		$output = sprintf(
			'<div class="menu-slider__section">
			 	<h3>%1$s</h3>
			 	<div class="menu-slider__initial">
					%2$s
			</div>',
			$title ,
			$this->content
		);

		return $output;

		// Render wrapper
		// 3rd party module with no full VB support has to wrap its render output with $this->_render_module_wrapper().
		// This method will automatically add module attributes and proper structure for parallax image/video background
		//return $this->_render_module_wrapper( $output, $render_slug );
	}
}

new MenuSliderParent;
