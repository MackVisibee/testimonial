<?php

class MenuSliderChild extends ET_Builder_Module {

	public $slug                     = 'menu_slider_child';
	public $vb_support               = 'on';
	public $type                     = 'child';
	public $child_title_var          = 'title';


	public function init() {
		$this->name                        = esc_html__( 'Slider Item', 'menu-slider' );

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Content', 'menu-slider' ),
				),
			)
		);
		$this->main_css_element            = '%%order_class%%.Toggle-item';
	}

	public function get_fields() {
	


		return array(
			
			'title'                 => array(
				'label'           => esc_html__( 'Title', 'menu-slider' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'menu-slider' ),
				'toggle_slug'     => 'main_content',
			),
			'url'                 => array(
				'label'           => esc_html__( 'Upload Image', 'menu-slider' ),
				'type'            => 'upload',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Upload your slider image here.', 'menu-slider' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	

	public function render( $attrs, $content = null, $render_slug ) {
		$title                       = $this->props['title'];
		$image                       = $this->props['url'];
		$output = sprintf(
			'<div class="menu-slider__item">
				
				<div class="menu-slider__image">
					<img src="%2$s" alt="%1$s" />
				</div>
				<h4 class="menu-slider__title">%1$s</h4>
			</div>
			',
			$title,
			$image
		);

		return $output;
	}
}

new MenuSliderChild;
