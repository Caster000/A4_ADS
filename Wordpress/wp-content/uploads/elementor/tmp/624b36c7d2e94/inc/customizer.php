<?php
/**
 * Theme Customizer.
 *
 * @package Interium
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */

function interium_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'interium-theme/customizer/options' , array(
		'prefix'        => 'interium',
		'path'          => get_theme_file_path( 'framework/modules/customizer/' ),
		'capability'    => 'edit_theme_options',
		'type'          => 'theme_mod',
		'fonts_manager' => new CX_Fonts_Manager(),
		'options'       => array(

			/** `Site Indentity` section */
			'show_tagline' => array(
				'title'    => esc_html__( 'Show tagline on top panel', 'interium' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'interium' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'general_settings' => array(
				'title'       => esc_html__( 'General Site settings', 'interium' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Favicon` section */
			'favicon' => array(
				'title'       => esc_html__( 'Favicon', 'interium' ),
				'priority'    => 25,
				'panel'       => 'general_settings',
				'type'        => 'section',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'interium' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'interium' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'interium' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title' => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'interium' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'interium' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'interium' ),
					'minified' => esc_html__( 'Minified', 'interium' ),
				),
				'type'    => 'control',
			),

			/** `Social links` section */
			'social_links' => array(
				'title'    => esc_html__( 'Social links', 'interium' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links' => array(
				'title'   => esc_html__( 'Show social links in header', 'interium' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links' => array(
				'title'   => esc_html__( 'Show social links in footer', 'interium' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout' => array(
				'title'    => esc_html__( 'Page Layout', 'interium' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'container_type' => array(
				'title'   => esc_html__( 'Container type', 'interium' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'interium' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'interium' ),
				),
				'type' => 'control',
			),
			'sidebar_width' => array(
				'title'   => esc_html__( 'Sidebar width', 'interium' ),
				'section' => 'page_layout',
				'default' => '1/3',
				'field'   => 'select',
				'choices' => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),
			'show_page_title' => array(
				'title'    => esc_html__( 'Show Page Title', 'interium' ),
				'section'  => 'page_layout',
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),

			/** `ToTop button` section */
			'totop_button' => array(
				'title'    => esc_html__( 'ToTop button', 'interium' ),
				'priority' => 60,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),

			'totop_visibility' => array(
				'title'    => esc_html__( 'Show ToTop button', 'interium' ),
				'section'  => 'totop_button',
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_vertical_padding' => array(
				'title'       => esc_html__( 'Vertical Padding, px', 'interium' ),
				'section'     => 'totop_button',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			'totop_horizontal_padding' => array(
				'title'       => esc_html__( 'Horizontal Padding, px', 'interium' ),
				'section'     => 'totop_button',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			'totop_border_radius' => array(
				'title'   => esc_html__( 'Border Radius, px', 'interium' ),
				'section' => 'totop_button',
				'default' => '0',
				'field'   => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			'totop_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'interium' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			'totop_icon_color' => array(
				'title'   => esc_html__( 'Icon Color', 'interium' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			'totop_bg_color_hover' => array(
				'title'   => esc_html__( 'Background Color Hover', 'interium' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			'totop_icon_color_hover' => array(
				'title'   => esc_html__( 'Icon Color Hover', 'interium' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'interium_is_totop_enable',
			),

			/** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'interium' ),
				'description' => esc_html__( 'Configure Color Scheme', 'interium' ),
				'priority'    => 40,
				'type'        => 'section',
			),

			'accent_color' => array(
				'title'   => esc_html__( 'Accent color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#398ffc',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'primary_text_color' => array(
				'title'   => esc_html__( 'Primary Text color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'secondary_text_color' => array(
				'title'   => esc_html__( 'Secondary Text color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#a1a2a4',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Invert Text color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'link_color' => array(
				'title'   => esc_html__( 'Link color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#398ffc',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'interium' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'interium' ),
				'description' => esc_html__( 'Configure typography settings', 'interium' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body text', 'interium' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'body_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'body_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'body_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'body_typography',
				'default'     => '1.6',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'       => esc_html__( 'H1 Heading', 'interium' ),
				'priority'    => 10,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'h1_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'h1_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'h1_typography',
				'default'     => '56',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'h1_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'       => esc_html__( 'H2 Heading', 'interium' ),
				'priority'    => 15,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'h2_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'h2_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'h2_typography',
				'default'     => '40',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'h2_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'       => esc_html__( 'H3 Heading', 'interium' ),
				'priority'    => 20,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h3_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'h3_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'h3_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'h3_typography',
				'default'     => '28',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'h3_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'       => esc_html__( 'H4 Heading', 'interium' ),
				'priority'    => 25,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'h4_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'h4_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'h4_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'h4_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'       => esc_html__( 'H5 Heading', 'interium' ),
				'priority'    => 30,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'h5_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'h5_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'h5_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'h5_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'       => esc_html__( 'H6 Heading', 'interium' ),
				'priority'    => 35,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'h6_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'h6_typography',
				'default' => '500',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'h6_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'h6_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'interium' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => interium_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Logo text` section */
			'logo_typography' => array(
				'title'       => esc_html__( 'Logo text', 'interium' ),
				'priority'    => 40,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'interium' ),
				'section'         => 'logo_typography',
				'default'         => 'Montserrat, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'interium' ),
				'section'         => 'logo_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => interium_get_font_styles(),
				'type'            => 'control',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'interium' ),
				'section'         => 'logo_typography',
				'default'         => '700',
				'field'           => 'select',
				'choices'         => interium_get_font_weight(),
				'type'            => 'control',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'interium' ),
				'section'         => 'logo_typography',
				'default'         => '26',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'interium' ),
				'section'         => 'logo_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => interium_get_character_sets(),
				'type'            => 'control',
			),

			/** `Menu` section */
			'menu_typography' => array(
				'title'       => esc_html__( 'Menu', 'interium' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'menu_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'interium' ),
				'section'         => 'menu_typography',
				'default'         => 'Roboto, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'menu_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'interium' ),
				'section'         => 'menu_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => interium_get_font_styles(),
				'type'            => 'control',
			),
			'menu_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'interium' ),
				'section'         => 'menu_typography',
				'default'         => '400',
				'field'           => 'select',
				'choices'         => interium_get_font_weight(),
				'type'            => 'control',
			),
			'menu_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'interium' ),
				'section'         => 'menu_typography',
				'default'         => '14',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'menu_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'menu_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'menu_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'menu_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'menu_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'interium' ),
				'section'         => 'menu_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => interium_get_character_sets(),
				'type'            => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography' => array(
				'title'       => esc_html__( 'Breadcrumbs', 'interium' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'breadcrumbs_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'interium' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'interium' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => interium_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'interium' ),
				'section' => 'breadcrumbs_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => interium_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'interium' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '11',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'breadcrumbs_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'interium' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => interium_get_character_sets(),
				'type'    => 'control',
			),
			/** `Button` section */
			'button_typography' => array(
				'title'       => esc_html__( 'Button', 'interium' ),
				'priority'    => 55,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'button_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'interium' ),
				'section'         => 'button_typography',
				'default'         => 'Roboto, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'button_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'interium' ),
				'section'         => 'button_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => interium_get_font_styles(),
				'type'            => 'control',
			),
			'button_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'interium' ),
				'section'         => 'button_typography',
				'default'         => '900',
				'field'           => 'select',
				'choices'         => interium_get_font_weight(),
				'type'            => 'control',
			),
			'button_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'interium' ),
				'section'         => 'button_typography',
				'default'         => '11',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'button_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'interium' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'interium' ),
				'section'     => 'button_typography',
				'default'     => '1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'button_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'interium' ),
				'section'     => 'button_typography',
				'default'     => '1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'button_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'interium' ),
				'section'         => 'button_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => interium_get_character_sets(),
				'type'            => 'control',
			),

			/** `Header` panel */
			'header_options' => array(
				'title'       => esc_html__( 'Header', 'interium' ),
				'priority'    => 60,
				'type'        => 'panel',
			),

			/** `Header styles` section */
			'header_styles' => array(
				'title'       => esc_html__( 'Styles', 'interium' ),
				'priority'    => 5,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_bg_color' => array(
				'title'           => esc_html__( 'Background Color', 'interium' ),
				'section'         => 'header_styles',
				'field'           => 'hex_color',
				'default'         => '#ffffff',
				'type'            => 'control',
			),
			'header_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'interium' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
			),
			'header_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'interium' ),
				'section' => 'header_styles',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat'  => esc_html__( 'No Repeat', 'interium' ),
					'repeat'     => esc_html__( 'Tile', 'interium' ),
					'repeat-x'   => esc_html__( 'Tile Horizontally', 'interium' ),
					'repeat-y'   => esc_html__( 'Tile Vertically', 'interium' ),
				),
				'type' => 'control',
			),
			'header_bg_position_x' => array(
				'title'   => esc_html__( 'Background Position', 'interium' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'interium' ),
					'center' => esc_html__( 'Center', 'interium' ),
					'right'  => esc_html__( 'Right', 'interium' ),
				),
				'type' => 'control',
			),
			'header_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'interium' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'interium' ),
					'fixed'  => esc_html__( 'Fixed', 'interium' ),
				),
				'type' => 'control',
			),

			/** `Top Panel` section */
			'header_top_panel' => array(
				'title'       => esc_html__( 'Top Panel', 'interium' ),
				'priority'    => 10,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'top_panel_enable' => array(
				'title'   => esc_html__( 'Enable Top Panel', 'interium' ),
				'section' => 'header_top_panel',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_bg' => array(
				'title'   => esc_html__( 'Background color', 'interium' ),
				'section' => 'header_top_panel',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Footer` panel */
			'footer_options' => array(
				'title'    => esc_html__( 'Footer', 'interium' ),
				'priority' => 110,
				'type'     => 'section',
			),

			'footer_copyright' => array(
				'title'   => esc_html__( 'Copyright text', 'interium' ),
				'section' => 'footer_options',
				'default' => interium_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title'       => esc_html__( 'Blog Settings', 'interium' ),
				'priority'    => 115,
				'type'        => 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title'           => esc_html__( 'Blog', 'interium' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				//'active_callback' => 'is_home',
			),
			'blog_sidebar_position' => array(
				'title'    => esc_html__( 'Sidebar', 'interium' ),
				'section'  => 'blog',
				'default'  => 'one-right-sidebar',
				'field'    => 'select',
				'priority' => 10,
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'interium' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'interium' ),
					'none'              => esc_html__( 'No sidebar', 'interium' ),
				),
				'type' => 'control',
				'active_callback' => 'interium_is_blog_sidebar_enabled',
			),
			'blog_navigation_type' => array(
				'title'   => esc_html__( 'Navigation type', 'interium' ),
				'section' => 'blog',
				'default' => 'navigation',
				'field'   => 'select',
				'choices' => array(
					'navigation' => esc_html__( 'Navigation', 'interium' ),
					'pagination' => esc_html__( 'Pagination', 'interium' ),
				),
				'type' => 'control',
			),
			'blog_sticky_type' => array(
				'title'    => esc_html__( 'Sticky label type', 'interium' ),
				'section'  => 'blog',
				'default'  => 'icon',
				'field'    => 'select',
				'priority' => 15,
				'choices' => array(
					'label' => esc_html__( 'Text Label', 'interium' ),
					'icon'  => esc_html__( 'Font Icon', 'interium' ),
					'both'  => esc_html__( 'Text with Icon', 'interium' ),
				),
				'type' => 'control',
			),
			'blog_sticky_label' => array(
				'title'           => esc_html__( 'Featured Post Label', 'interium' ),
				'description'     => esc_html__( 'Label for sticky post', 'interium' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Featured', 'interium' ),
				'field'           => 'text',
				'priority'        => 20,
				'active_callback' => 'interium_is_sticky_text',
				'type'            => 'control',
			),
			'blog_post_author' => array(
				'title'    => esc_html__( 'Show post author', 'interium' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 25,
				'type'     => 'control',
			),
			'blog_post_publish_date' => array(
				'title'    => esc_html__( 'Show publish date', 'interium' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 30,
				'type'     => 'control',
			),
			'blog_post_categories' => array(
				'title'    => esc_html__( 'Show categories', 'interium' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 35,
				'type'     => 'control',
			),
			'blog_post_tags' => array(
				'title'    => esc_html__( 'Show tags', 'interium' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 40,
				'type'     => 'control',
			),
			'blog_post_comments' => array(
				'title'    => esc_html__( 'Show comments', 'interium' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 45,
				'type'     => 'control',
			),
			'blog_post_excerpt' => array(
				'title'   => esc_html__( 'Show Excerpt', 'interium' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'priority' => 50,
				'type'    => 'control'
			),
			'blog_post_excerpt_words_count' => array(
				'title'       => esc_html__( 'Excerpt Words Count', 'interium' ),
				'section'     => 'blog',
				'default'     => '50',
				'priority'    => 55,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
			),
			'blog_read_more_type' => array(
				'title'    => esc_html__( 'Read more button type', 'interium' ),
				'section'  => 'blog',
				'default'  => 'text',
				'field'    => 'select',
				'priority' => 60,
				'choices' => array(
					'text'      => esc_html__( 'Text', 'interium' ),
					'icon'      => esc_html__( 'Icon', 'interium' ),
					'text_icon' => esc_html__( 'Text & Icon', 'interium' ),
					'none'      => esc_html__( 'None', 'interium' ),
				),
				'type'    => 'control',
			),
			'blog_read_more_text' => array(
				'title'           => esc_html__( 'Read more button text', 'interium' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'More', 'interium' ),
				'field'           => 'text',
				'priority'        => 65,
				'type'            => 'control',
				'active_callback' => 'interium_is_blog_read_more_btn_text',
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'interium' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar', 'interium' ),
				'section' => 'blog_post',
				'default' => 'one-right-sidebar',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'interium' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'interium' ),
					'none'              => esc_html__( 'No sidebar', 'interium' ),
				),
				'type' => 'control',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'interium' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'interium' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'interium' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'interium' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'interium' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block' => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'interium' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Related Posts` section */
			'related_posts' => array(
				'title'           => esc_html__( 'Related posts block', 'interium' ),
				'panel'           => 'blog_settings',
				'priority'        => 30,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'related_posts_visible' => array(
				'title'   => esc_html__( 'Show related posts block', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_block_title' => array(
				'title'   => esc_html__( 'Related posts block title', 'interium' ),
				'section' => 'related_posts',
				'default' => esc_html__( 'Related Posts', 'interium' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'related_posts_count' => array(
				'title'   => esc_html__( 'Number of post', 'interium' ),
				'section' => 'related_posts',
				'default' => '4',
				'field'   => 'text',
				'type'    => 'control',
			),
			'related_posts_grid' => array(
				'title'   => esc_html__( 'Layout', 'interium' ),
				'section' => 'related_posts',
				'default' => '2',
				'field'   => 'select',
				'choices' => array(
					'2'        => esc_html__( '2 columns', 'interium' ),
					'3'        => esc_html__( '3 columns', 'interium' ),
					'4'        => esc_html__( '4 columns', 'interium' ),
				),
				'type' => 'control',
			),
			'related_posts_image' => array(
				'title'   => esc_html__( 'Show post image', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_publish_date' => array(
				'title'   => esc_html__( 'Show post publish date', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_author' => array(
				'title'   => esc_html__( 'Show post author', 'interium' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_title' => array(
				'title'   => esc_html__( 'Show post title', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_excerpt' => array(
				'title'   => esc_html__( 'Display excerpt', 'interium' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type' => 'control',
			),

			/* 'related_posts_categories' => array(
				'title'   => esc_html__( 'Show post categories', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			), */
			/* 'related_posts_tags' => array(
				'title'   => esc_html__( 'Show post tags', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			), */
			/* 'related_posts_comment_count' => array(
				'title'   => esc_html__( 'Show post comment count', 'interium' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			), */

	) ) );
}

/**
 * Return true if value of passed setting is not equal with passed value.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function interium_is_not_setting( $control, $setting, $value ) {

	if ( $value !== $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;

}

/**
 * Return true if sticky label type set to text or text with icon.
 *
 * @param  object $control
 * @return bool
 */
function interium_is_sticky_text( $control ) {
	return interium_is_not_setting( $control, 'blog_sticky_type', 'icon' );
}

/**
 * Return true if sticky label type set to icon or text with icon.
 *
 * @param  object $control
 * @return bool
 */
function interium_is_sticky_icon( $control ) {
	return interium_is_not_setting( $control, 'blog_sticky_type', 'label' );
}


/**
 * Move native `site_icon` control (based on WordPress core) into custom section.
 *
 * @since 1.0.0
 * @param  object $wp_customize
 * @return void
 */
function interium_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'interium_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'interium' );
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'interium_customizer_change_core_controls', 20 );

/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
function interium_get_font_styles() {
	return apply_filters( 'interium-theme/font/styles', array(
		'normal'  => esc_html__( 'Normal', 'interium' ),
		'italic'  => esc_html__( 'Italic', 'interium' ),
		'oblique' => esc_html__( 'Oblique', 'interium' ),
		'inherit' => esc_html__( 'Inherit', 'interium' ),
	) );
}

/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
function interium_get_character_sets() {
	return apply_filters( 'interium-theme/font/character_sets', array(
		'latin'        => esc_html__( 'Latin', 'interium' ),
		'greek'        => esc_html__( 'Greek', 'interium' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'interium' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'interium' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'interium' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'interium' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'interium' ),
	) );
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
function interium_get_text_aligns() {
	return apply_filters( 'interium-theme/font/text-aligns', array(
		'inherit' => esc_html__( 'Inherit', 'interium' ),
		'center'  => esc_html__( 'Center', 'interium' ),
		'justify' => esc_html__( 'Justify', 'interium' ),
		'left'    => esc_html__( 'Left', 'interium' ),
		'right'   => esc_html__( 'Right', 'interium' ),
	) );
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
function interium_get_font_weight() {
	return apply_filters( 'interium-theme/font/weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */

function interium_get_dynamic_css_options() {
	return apply_filters( 'interium-theme/dynamic_css/options', array(
		'prefix'        => 'interium',
		'type'          => 'theme_mod',
		'parent_handles' => array(
			'css' => 'interium-theme-style',
			'js'  => 'interium-theme-js',
		),
		'css_files'      => array(
			get_theme_file_path( 'assets/css/dynamic.css' ),
			get_theme_file_path( 'assets/css/dynamic/header.css' ),
			get_theme_file_path( 'assets/css/dynamic/menus.css' ),
			get_theme_file_path( 'assets/css/dynamic/social.css' ),
			get_theme_file_path( 'assets/css/dynamic/navigation.css' ),
			get_theme_file_path( 'assets/css/dynamic/buttons.css' ),
			get_theme_file_path( 'assets/css/dynamic/forms.css' ),
			get_theme_file_path( 'assets/css/dynamic/post.css' ),
			get_theme_file_path( 'assets/css/dynamic/page.css' ),
			get_theme_file_path( 'assets/css/dynamic/post-grid.css' ),
			get_theme_file_path( 'assets/css/dynamic/post-justify.css' ),
			get_theme_file_path( 'assets/css/dynamic/post-masonry.css' ),
			get_theme_file_path( 'assets/css/dynamic/widgets.css' ),
			get_theme_file_path( 'assets/css/dynamic/plugins.css' ),
		),
		'options_cb'     => 'get_theme_mods',
	) );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function interium_get_default_footer_copyright() {
	return esc_html__( '&copy; %%year%% Interium | Multipurpose WP Theme with Elementor Page Builder', 'interium' );
}

/**
 * Return true if blog sidebar enabled.
 *
 * @return bool
 */
function interium_is_blog_sidebar_enabled() {
	return apply_filters( 'interium-theme/customizer/blog-sidebar-enabled', true );
}


/**
 * Return true if option Read More button type is text type. Otherwise - return false.
 *
 * @return bool
 */
function interium_is_blog_read_more_btn_text() {
	$btn_type = interium_theme()->customizer->get_value( 'blog_read_more_type' );
	return 'text' === $btn_type || 'text_icon' === $btn_type ? true : false;
}

/**
 * Return false if option Enable Totop button is enable.
 *
 * @param  object $control Parent control.
 * @return bool
 */

function interium_is_totop_enable( $control ) {
	return interium_is_not_setting( $control, 'totop_visibility', false );
}