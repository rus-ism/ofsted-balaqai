<?php
/**
 * News Section
 *
 * @package Preschool_and_Kindergarten_Child
 */

$section_title = get_theme_mod( 'preschool_and_kindergarten_news_section_title' );

if ( function_exists( 'pll__' ) && ! empty( $section_title ) ) {
	$section_title = pll__( $section_title );
}
$description   = get_theme_mod( 'preschool_and_kindergarten_news_section_description' );

if ( function_exists( 'pll_register_string' ) && ! empty( $section_title ) ) {
	pll_register_string(
		'news_section_title',
		$section_title,
		'Балауса — главная'
	);
}

if ( function_exists( 'pll__' ) && ! empty( $section_title ) ) {
	$section_title = pll__( $section_title );
}

if ( function_exists( 'pll_register_string' ) && ! empty( $description ) ) {
	pll_register_string(
		'news_section_description',
		$description,
		'Балауса — главная'
	);
}

if ( function_exists( 'pll__' ) && ! empty( $description ) ) {
	$description = pll__( $description );
}

?>

<section class="news">
	<div class="container">

		<?php
		preschool_and_kindergarten_get_section_header(
			$section_title,
			$description
		);

		$news_qry = new WP_Query(
			array(
				'posts_per_page'      => 3,
				'post_type'           => 'post',
				'category_name'       => 'novosti',
				'ignore_sticky_posts' => true,
			)
		);

		if ( $news_qry->have_posts() ) :
			?>
			<div class="row">
				<?php
				while ( $news_qry->have_posts() ) :
					$news_qry->the_post();
					?>
					<article class="post">

						<div class="posted-on">
							<strong><?php echo esc_html( get_the_date( 'd' ) ); ?></strong>
							<span><?php echo esc_html( get_the_date( 'M' ) ); ?></span>
						</div>

						<div class="text-holder">

							<header class="entry-header">
								<h3 class="entry-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
							</header>

							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div>

							<footer class="entry-footer">
								<a href="<?php the_permalink(); ?>" class="readmore">
									<?php esc_html_e( 'View Details', 'preschool-and-kindergarten' ); ?>
								</a>
							</footer>

						</div>

					</article>
					<?php
				endwhile;

				wp_reset_postdata();
				?>
			</div>
		<?php endif; ?>

	</div>
</section>