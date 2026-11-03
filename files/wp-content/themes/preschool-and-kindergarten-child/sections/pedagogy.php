<?php
/**
 * Pedagogical Staff Section
 *
 * @package Preschool_and_Kindergarten_Child
 */

if ( function_exists( 'pll__' ) ) {
	$section_title = pll__( 'Педагогический состав' );
	$workers       = pll__( 'Педагогических работников' );
	$higher        = pll__( 'Высшее педагогическое образование' );
	$secondary     = pll__( 'Средне-специальное педагогическое образование' );
	$preschool     = pll__( 'В том числе дошкольное образование' );
} else {
	$section_title = 'Педагогический состав';
	$workers       = 'Педагогических работников';
	$higher        = 'Высшее педагогическое образование';
	$secondary     = 'Средне-специальное педагогическое образование';
	$preschool     = 'В том числе дошкольное образование';
}
?>

<section class="balausa-pedagogy">
	<div class="container">

		<?php
		preschool_and_kindergarten_get_section_header(
			$section_title,
			''
		);
		?>

		<div class="balausa-facts-grid">

			<div class="balausa-fact">
				<div class="balausa-fact-number">9</div>
				<div class="balausa-fact-label">
					<?php echo esc_html( $workers ); ?>
				</div>
			</div>

			<div class="balausa-fact">
				<div class="balausa-fact-number">5</div>
				<div class="balausa-fact-label">
					<?php echo esc_html( $higher ); ?>
				</div>
			</div>

			<div class="balausa-fact">
				<div class="balausa-fact-number">4</div>
				<div class="balausa-fact-label">
					<?php echo esc_html( $secondary ); ?>
				</div>
			</div>

			<div class="balausa-fact">
				<div class="balausa-fact-number">5</div>
				<div class="balausa-fact-label">
					<?php echo esc_html( $preschool ); ?>
				</div>
			</div>

		</div>

	</div>
</section>