<?php
/**
 * Child module / module item (module which appears inside parent module) with FULL builder support
 * This module appears on Visual Builder and requires react component to be provided
 * Due to full builder support, all advanced options (except button options) are added by default
 *
 * @since 1.0.0
 */
class OurTeam_Child extends ET_Builder_Module {
	// Module slug (also used as shortcode tag)
	public $slug                     = 'our_team_parent_child';

	// Module item has to use `child` as its type property
	public $type                     = 'child';

	// Module item's attribute that will be used for module item label on modal
	public $child_title_var          = 'title';

	// If the attribute defined on $this->child_title_var is empty, this attribute will be used instead
	//public $child_title_fallback_var = 'subtitle';

	// Full Visual Builder support
	public $vb_support = 'on';

	// uncomment to disable cache builder
	/*public $debug_module = true;

	public function remove_from_local_storage() {
		global $debug_module; 
		echo "<script>localStorage.removeItem('et_pb_templates_".esc_attr($this->slug)."');</script>";
	}*/
	// uncomment to disable cache builder

	/**
	 * Module properties initialization
	 *
	 * @since 1.0.0
	 *
	 * @todo Remove $this->advanced_options['background'] once https://github.com/elegantthemes/Divi/issues/6913 has been addressed
	 */
	function init() {

		// à retirer en prod
		// uncomment to disable cache builder
		/*$debug_module = true;

		if (is_admin()) {
			// Clear module from cache if necessary
			if ($debug_module) { 
				add_action('admin_head', array( $this, 'remove_from_local_storage' ) );
			}
		}*/
		// à retirer en prod
		// uncomment to disable cache builder

		// Module name
		$this->name             = esc_html__( 'Edit Member', 'our-team' );

		$this->main_css_element = '%%order_class%%.our_team_parent_child';

		// Module item's modal title
		$this->settings_text = esc_html__( 'Paramètres de la facette', 'our-team' );

		// Toggle settings
		$this->settings_modal_toggles  = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Name', 'our-team' ),
					'image'        => esc_html__( 'Image & Icon', 'our-team' ),
					'button'       => esc_html__( 'Button', 'our-team' ),
				),
			),
		);

		//error_log(print_r($this, true));
	}

	/**
	 * Module's specific fields
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	function get_fields() {
		return array(
			
			'title' => array(
				'label'           => esc_html__( 'Title', 'our-team' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Your Title Here', 'our-team' ),
				'toggle_slug'     => 'main_content',
			),
			/*
			'content' => array(
				'label'           => esc_html__( 'Content', 'our-team' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Le texte saisi ici s\'affichera comme contenu de la facette', 'our-team' ),
				'toggle_slug'     => 'main_content',
			),
			'use_flip_icon' => array(
				'label'           => esc_html__( 'Afficher l\'icône de rotation', 'our-team' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Non', 'our-team' ),
					'on'  => esc_html__( 'Oui', 'our-team' ),
				),
				'description' => esc_html__( 'Choisissez si vous souhaitez afficher une icône de rotation', 'our-team' ),
				'default_on_front'=> 'off',
				'toggle_slug'     => 'main_content',
			),
			'button_text' => array(
				'label'           => esc_html__( 'Button Text', 'our-team' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Button Text Here', 'our-team' ),
				'toggle_slug'     => 'button',
			),
			'button_url' => array(
				'label'           => esc_html__( 'Button URL', 'our-team' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Button url here', 'our-team' ),
				'toggle_slug'     => 'button',
			),
			'button_url_new_window' => array(
				'default'         => 'off',
				'default_on_front'=> true,
				'label'           => esc_html__( 'Open new window', 'our-team' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'default', 'our-team' ),
					'on'  => esc_html__( 'New Window', 'our-team' ),
				),
				'toggle_slug'     => 'button',
				'description'     => esc_html__( 'Choisissez si le lien s\'ouvre dans une nouvelle fenêtre ou non.', 'our-team' ),
			),
			'use_icon' => array(
				'label'           => esc_html__( 'Use Icon', 'our-team' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Off', 'our-team' ),
					'on'  => esc_html__( 'On', 'our-team' ),
				),
				'toggle_slug'     => 'image',
				'affects'         => array(
					'font_icon',
					'image',
				),
				'description' => esc_html__( 'Choose options', 'our-team' ),
				'default_on_front'=> 'off',
			),
			'font_icon' => array(
				'label'               => esc_html__( 'Icon', 'our-team' ),
				'type'                => 'select_icon',
				'option_category'     => 'basic_option',
				'class'               => array( 'et-pb-font-icon' ),
				'toggle_slug'         => 'image',
				'description'         => esc_html__( 'Choose an icon', 'our-team' ),
				'depends_show_if'     => 'on',
			),*/
			'image' => array(
				'label'              => esc_html__( 'Image', 'our-team' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'our-team' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'our-team' ),
				'update_text'        => esc_attr__( 'Set As Image', 'our-team' ),
				'depends_show_if'    => 'off',
				'description'        => esc_html__( 'Image here', 'our-team' ),
				'toggle_slug'        => 'image',
			),
			/*'module_alignment' => array(
				'label'           => esc_html__( 'Module Alignment', 'et_builder' ),
				'type'            => 'text_align',
				'option_category' => 'layout',
				'options'         => et_builder_get_text_orientation_options( array( 'justified' ) ),
				'tab_slug'        => 'advanced',
				'toggle_slug'	  => 'width',
			),
			'title_shadow' => array(
				'label'           => esc_html__( 'Afficher l\'ombre du titre', 'our-team' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Non', 'our-team' ),
					'on'  => esc_html__( 'Oui', 'our-team' ),
				),
				'description' => esc_html__( 'Choisissez si vous souhaitez afficher l\'ombre du titre', 'our-team' ),
				'default_on_front'=> 'off',
				'tab_slug'		  => 'advanced',
				'toggle_slug'     => 'title',
			),*/
		);
	}

	/**
	 * Module's advanced fields configuration
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	/*
	function get_advanced_fields_config() {
		return array(
			'fonts'                 => array(
				'title' => array(
					'label'    => esc_html__( 'Title', 'our-team' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .flipbox-title",
						'font' => "{$this->main_css_element} .flipbox-title",
						'color' => "{$this->main_css_element} .flipbox-title",
						'plugin_main' => "{$this->main_css_element} .flipbox-title, {$this->main_css_element} .flipbox-title",
						'text_align' => "{$this->main_css_element} .flipbox-title",
						'important' => 'all',
					),
					'use_alignment' => true,
					'header_level' => array(
						'default' => 'h2',
					),
					'hide_text_shadow' => true,
				),
				'content'   => array(
					'label'    => esc_html__( 'Content', 'our-team' ),
					'css'      => array(
						'main'        => "{$this->main_css_element} .flipbox-content p",
						'color'       => "{$this->main_css_element}, {$this->main_css_element} .flipbox-content *",
						'line_height' => "{$this->main_css_element} .flipbox-content p",
						'plugin_main' => "{$this->main_css_element}, %%order_class%%.flipbox-content p",
					),
					'hide_text_shadow' => true,
				),
			),
			'button'                => array(
				'button' => array(
					'label' => esc_html__( 'Button', 'et_builder' ),
					'css' => array(
						'plugin_main' => "{$this->main_css_element} .et_pb_button",
						'alignment'   => "{$this->main_css_element} .et_pb_button_wrapper",
					),
					'options' => array(
						'alignement'  => array(
							'default'          => 'center',
						),
					),
					'defaults' => array(
						'alignement'      => 'center',
					),
					'use_alignment' => true,
					'box_shadow'    => false,
				),
			),
			'margin_padding' => array(
				'css' => array(
					'margin'  => "{$this->main_css_element} > div:first-child",
					'padding' => "{$this->main_css_element} > div:first-child",
					'important' => 'all',
				),
			),
			'max_width' => array(
				'use_max_width'        => true, // default
				'use_module_alignment' => true, // default
				'options' => array(
					'max_width' => array(
						'default' => '100%',
						'range_settings'  => array(
							'min'  => '0',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
			),
			'text' => false,
			'hide_text_shadow' => true,
			'use_background_layout' => false,
			'filters'			=> false,
		);
	}*/

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

		$image = $this->props['image'];
		$title = $this->props['title'];
		/*
		$use_icon = $this->props['use_icon'];
		$font_icon = $this->props['font_icon'];
		$title_level          = $this->props['title_level'];

		if ( 'off' === $use_icon ) {
			$image = ( '' !== trim( $image ) ) ? sprintf(
				'<span class="et-pb-icon"><img src="%1$s" /></span>',
				esc_attr( $image )
			) : '';
		} else {
			$image = ( '' !== $font_icon ) ? sprintf(
				'<span class="et-pb-icon">%1$s</span>',
				esc_attr( et_pb_process_font_icon( $font_icon ) )
			) : '';
		}
		// Module specific props added on $this->get_fields()
		$title                 = $this->props['title'];
		// $use_flip_icon         = $this->props['use_flip_icon'];
		// $title_shadow 		   = $this->props['title_shadow'];
		$button_text           = $this->props['button_text'];
		$button_url            = $this->props['button_url'];
		$button_url_new_window = $this->props['button_url_new_window'];

		// Design related props are added via $this->advanced_options['button']['button']
		$button_custom         = $this->props['custom_button'];
		$button_rel            = $this->props['button_rel'];
		$button_use_icon       = $this->props['button_use_icon'];

		// Render button
		$button = $this->render_button( array(
			'button_text'      => $button_text,
			'button_url'       => $button_url,
			'url_new_window'   => $button_url_new_window,
			'button_custom'    => $button_custom,
			'button_rel'       => $button_rel,
			'custom_icon'      => $button_use_icon,
		) );

		$title_class = 'flipbox-title et_pb_module_header';
		// if ( 'on' === $title_shadow ) {
		// 	$title_class .= ' title_shadow';
		// }

		if ( '' !== $title ) {
			$title = sprintf( '<%1$s class="%3$s">%2$s</%1$s>', et_pb_process_header_level( $title_level, 'h2' ), $title, $title_class );
		}*/

		// if ( 'on' === $use_flip_icon ) {
		// 	$flip_icon = '<div class="et_pb_button rotate_button"></div>';
		// } else {
		// 	$flip_icon = '';
		// }

		// Render module content
		$output = sprintf(
			'<li class="carousel__item">
				<img src="%1$s" alt="%2$s"/>
			</li>',
			//<div class="flipbox-bottom">%5$s</div>',
			$image,
			$title
			
			/*$title,
			et_core_sanitized_previously( $this->content ),
			et_core_sanitized_previously( $button ),*/
			// $flip_icon
		);

		return $output;
		// Render wrapper
		// 3rd party module with no full VB support has to wrap its render output with $this->_render_module_wrapper().
		// This method will automatically add module attributes and proper structure for parallax image/video background
		//return $this->_render_module_wrapper( $output, $render_slug );
	}
}

new OurTeam_Child;
