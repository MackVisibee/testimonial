<?php

class TestimonialChild extends ET_Builder_Module {

	public $slug                     = 'testimonial_child';
	public $vb_support               = 'on';
	public $type                     = 'child';
	public $child_title_var          = 'title';


	public function init() {
		$this->name                        = esc_html__( 'Member', 'testimonial-slider' );

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Content', 'testimonial-slider' ),
				),
			)
		);
		$this->main_css_element            = '%%order_class%%.Toggle-item';
	}

	public function get_fields() {
	


		return array(
			'url'                 => array(
				'label'           => esc_html__( 'Upload Logo', 'testimonial-slider' ),
				'type'            => 'upload',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Upload your slider logo here.', 'testimonial-slider' ),
				'toggle_slug'     => 'main_content',
			),
			'small_title'                 => array(
				'label'           => esc_html__( 'Small Title', 'testimonial-slider' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'testimonial-slider' ),
				'toggle_slug'     => 'main_content',
			),
			'main_title'                 => array(
				'label'           => esc_html__( 'Main Title', 'testimonial-slider' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'testimonial-slider' ),
				'toggle_slug'     => 'main_content',
			),
			'content'                 => array(
				'label'           => esc_html__( 'Content', 'testimonial-slider' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'testimonial-slider' ),
				'toggle_slug'     => 'main_content',
			),
			'profile'                 => array(
				'label'           => esc_html__( 'Upload Profile', 'testimonial-slider' ),
				'type'            => 'upload',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Upload your slider logo here.', 'testimonial-slider' ),
				'toggle_slug'     => 'main_content',
			),
			'name'                 => array(
				'label'           => esc_html__( 'Name', 'testimonial-slider' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Text entered here will appear as title.', 'testimonial-slider' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	

	public function render( $attrs, $content = null, $render_slug ) {
		$logo                       = $this->props['url'];
		$small_title                = $this->props['small_title'];
		$main_title                = $this->props['main_title'];
		$text                = $this->props['content'];
		$profile                = $this->props['profile'];
		$name                = $this->props['name'];


		$output = sprintf(
			'<div class="testimonial-slider__item">
				<div class="item-col">
					<img src="%1$s" alt="" />
				</div>
				<div class="item-col">
				<h4>%2$s</h4>
				<h3>%3$s</h3>
				<p>%4$s</p>
				<div class="profile">
					<div class="profile-image"><img src="%5$s" alt="" /></div>
					<h6>%6$s</h6>
				</div>
				</div>
			</div>
			',
			$logo,
			$small_title,
			$main_title,
			$text,
			$profile,
			$name,
		);

		return $output;
	}
}

new TestimonialChild;
