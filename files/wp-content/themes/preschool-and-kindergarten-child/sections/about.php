<?php
/**
 * About Section
 *
 * @package Preschool_and_Kindergarten_Child
 */

$about_page = absint(
	get_theme_mod( 'preschool_and_kindergarten_about_page' )
);

/*
 * Получаем перевод выбранной страницы для текущего языка.
 * Если перевода нет или Polylang недоступен — используем исходную страницу.
 */
if ( $about_page && function_exists( 'pll_get_post' ) ) {
	$translated_page = pll_get_post( $about_page );

	if ( $translated_page ) {
		$about_page = $translated_page;
	}
}

if ( $about_page ) {

	$about_query = new WP_Query(
		array(
			'p'         => $about_page,
			'post_type' => 'page',
		)
	);

	if ( $about_query->have_posts() ) {

		while ( $about_query->have_posts() ) {
			$about_query->the_post();
			?>

			<section class="welcome balausa-about">
				<div class="container">
					<div class="row">

						<div class="img-holder">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail(
									'preschool-and-kindergarten-about-thumb',
									array(
										'itemprop' => 'image',
									)
								);
							} else {
								preschool_and_kindergarten_get_fallback_svg(
									'preschool-and-kindergarten-about-thumb'
								);
							}
							?>
						</div>

						<div class="text-holder">

							<h2 class="title">
								<?php the_title(); ?>
							</h2>

							<?php the_excerpt(); ?>

							<a href="<?php the_permalink(); ?>" class="btn-more">
								<?php
									echo esc_html(
										function_exists( 'pll__' )
											? pll__( 'Read More' )
											: __( 'Read More', 'preschool-and-kindergarten' )
									);
									?>
							</a>

						</div>

					</div>
				</div>
			</section>

			<?php
		}

		wp_reset_postdata();
	}
}