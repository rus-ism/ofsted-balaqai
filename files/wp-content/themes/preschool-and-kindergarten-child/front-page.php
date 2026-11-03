<?php
/**
 * Front Page
 *
 * @package Preschool_and_Kindergarten_Child
 */

$ed_section = preschool_and_kindergarten_ed_section();

$preschool_and_kindergarten_page_sections = array(
	'banners',
	'navigation',
	'about',
	'groups',
	'facts',
	'lessons',
	'services',
	'promotional',
	'program',
	'testimonials',
	
	'news',
	'enrollment'
);

if ( 'posts' == get_option( 'show_on_front' ) ) {

	include( get_home_template() );

} elseif ( $ed_section ) {

	get_header();

	foreach ( $preschool_and_kindergarten_page_sections as $section ) {

		/*
		 * Наш собственный блок facts не требует отдельной
		 * настройки в Customizer.
		 */
		if (
			in_array($section, array('facts', 'navigation', 'enrollment', 'groups'), true) ||
			get_theme_mod( 'preschool_and_kindergarten_ed_' . $section . '_section' ) == 1
		) {
			get_template_part( 'sections/' . esc_attr( $section ) );
		}
	}

	get_footer();

} else {

	include( get_page_template() );
}