<?php

/**
 * Load parent and child styles.
 */
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style(
		'parent-theme',
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		'child-theme',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'parent-theme' ),
		wp_get_theme()->get( 'Version' )
	);

} );


/**
 * Copy parent theme Customizer settings to the child theme
 * on the first activation of the child theme.
 */
add_action( 'after_switch_theme', function() {

	if ( get_option( 'balausa_child_theme_settings_migrated' ) ) {
		return;
	}

	$parent_slug = get_template();
	$child_slug  = get_stylesheet();

	$parent_mods = get_option( 'theme_mods_' . $parent_slug, false );

	if ( false !== $parent_mods ) {
		update_option( 'theme_mods_' . $child_slug, $parent_mods );
		update_option( 'balausa_child_theme_settings_migrated', 1 );
	}

} );

/**
 * Custom footer copyright.
 */
if ( ! function_exists( 'preschool_and_kindergarten_footer_bottom' ) ) :

	function preschool_and_kindergarten_footer_bottom() {
		?>
		<div class="site-info">
			&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
			Детский сад «Балақай» ЧУ «Ofsted».

			<?php
			$privacy_policy_url = get_privacy_policy_url();

			if ( $privacy_policy_url ) {
				?>
				<a href="<?php echo esc_url( $privacy_policy_url ); ?>">
					Политика конфиденциальности
				</a>
				<?php
			}
			?>
		</div>
		<?php
	}

endif;

add_action(
	'preschool_and_kindergarten_footer',
	'preschool_and_kindergarten_footer_bottom',
	30
);


/**
 * Register custom strings for Polylang.
 */
add_action( 'init', function() {

	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}

	/* Слайдер */
	pll_register_string(
		'slider_read_more',
		'Подробнее',
		'Балауса — главная'
	);

	/* Факты о детском саде */
	pll_register_string(
		'fact_capacity',
		'Проектная мощность',
		'Балауса — главная'
	);

	pll_register_string(
		'fact_goszakaz',
		'Мест по государственному заказу',
		'Балауса — главная'
	);

	pll_register_string(
		'fact_groups',
		'Группы',
		'Балауса — главная'
	);

	pll_register_string(
		'fact_schedule',
		'Режим работы',
		'Балауса — главная'
	);

	/* Педагогический состав */
	pll_register_string(
		'pedagogy_title',
		'Педагогический состав',
		'Балауса — главная'
	);

	pll_register_string(
		'pedagogy_workers',
		'Педагогических работников',
		'Балауса — главная'
	);

	pll_register_string(
		'pedagogy_higher',
		'Высшее педагогическое образование',
		'Балауса — главная'
	);

	pll_register_string(
		'pedagogy_secondary',
		'Средне-специальное педагогическое образование',
		'Балауса — главная'
	);

	pll_register_string(
		'pedagogy_preschool',
		'В том числе дошкольное образование',
		'Балауса — главная'
	);
	
	pll_register_string(
		'about_read_more',
		'Read More',
		'Балауса — главная'
	);	
	
	
//////////////
	pll_register_string(
    'balaqai_groups_title',
    'Наши группы',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_groups_subtitle',
    'Возрастные группы и информация о свободных местах.',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_group_middle',
    'Средняя группа',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_group_senior',
    'Старшая группа',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_group_preschool',
    'Предшкольная группа',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_group_children',
    'Количество детей',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_group_places',
    'Свободных мест',
    'Balaqai Groups'
);

pll_register_string(
    'balaqai_groups_note',
    'Количество свободных мест может изменяться.',
    'Balaqai Groups'
);

	
	
	
pll_register_string(
    'balaqai_facts_title',
    'Балақай в цифрах',
    'Balaqai Facts'
);

pll_register_string(
    'balaqai_facts_groups',
    'Возрастные группы',
    'Balaqai Facts'
);

pll_register_string(
    'balaqai_facts_children',
    'Всего детей',
    'Balaqai Facts'
);

pll_register_string(
    'balaqai_facts_places',
    'Свободных мест',
    'Balaqai Facts'
);	

} );

/**
 * Register theme and widget strings for Polylang.
 */
add_action( 'init', function() {

	if ( ! function_exists( 'pll_register_string' ) ) {
		return;
	}

	pll_register_string(
		'news_section_title',
		'Новости и объявления',
		'Балауса — главная'
	);

	pll_register_string(
		'social_media_title',
		'SOCIAL MEDIA',
		'Балауса — подвал'
	);

} );


/**
 * Translate footer widget title.
 */
add_filter( 'widget_title', function( $title ) {

	if ( ! function_exists( 'pll__' ) ) {
		return $title;
	}

	if ( 'SOCIAL MEDIA' === trim( $title ) ) {
		return pll__( 'SOCIAL MEDIA' );
	}

	return $title;

} );



if (function_exists('pll_register_string')) {

    pll_register_string(
        'enrollment_title',
        'Как поступить в детский сад',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_subtitle',
        'Постановка в очередь и зачисление в дошкольную организацию осуществляются в электронной форме.',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_1_title',
        'Постановка в очередь',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_1_text',
        'Подайте электронное заявление для постановки ребёнка в очередь.',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_2_title',
        'Получите ваучер',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_2_text',
        'Дождитесь уведомления о предоставлении ваучера в электронной системе.',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_3_title',
        'Подтвердите ваучер',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_3_text',
        'Подтвердите согласие на использование ваучера в течение 2 рабочих дней.',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_4_title',
        'Выберите детский сад',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_step_4_text',
        'После подтверждения ваучера выберите организацию и оформите зачисление в течение 5 рабочих дней.',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_docs_title',
        'Подготовьте документы заранее',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_docs_text',
        'Удостоверение личности родителя или законного представителя, свидетельство о рождении ребёнка, паспорт здоровья, справку о состоянии здоровья и, при необходимости, заключение ПМПК.',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_button',
        'ПЕРЕЙТИ В INDIGO',
        'Balausa Enrollment'
    );

    pll_register_string(
        'enrollment_note',
        'Порядок и сроки могут изменяться в соответствии с действующими правилами.',
        'Balausa Enrollment'
    );
}



/**
 * Language switcher in the top header bar.
 */
function balausa_language_switcher() {

	if ( ! function_exists( 'pll_the_languages' ) ) {
		return;
	}

	$languages = pll_the_languages(
		array(
			'raw'                    => 1,
			'hide_if_no_translation' => 0,
			'hide_current'           => 0,
		)
	);

	if ( empty( $languages ) ) {
		return;
	}

	echo '<div class="balausa-language-switcher">';

	foreach ( $languages as $language ) {

		$class = ! empty( $language['current_lang'] ) ? ' current' : '';

		echo '<a class="balausa-language-switcher__link' . esc_attr( $class ) . '" href="' . esc_url( $language['url'] ) . '">';

		echo esc_html( strtoupper( $language['slug'] ) );

		echo '</a>';
	}

	echo '</div>';
}

add_action(
	'preschool_and_kindergarten_social',
	'balausa_language_switcher',
	20
);