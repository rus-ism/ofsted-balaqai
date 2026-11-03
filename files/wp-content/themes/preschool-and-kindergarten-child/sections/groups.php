<?php
/**
 * Группы детского сада «Балақай»
 */

$translate = static function ($text) {
    return function_exists('pll__') ? pll__($text) : $text;
};

$groups = array(
    array(
        'type'     => 'Средняя группа',
        'name'     => 'Жұлдыз',
        'children' => 25,
        'places'   => 14,
        'symbol'   => '★',
        'color'    => 'yellow',
    ),
    array(
        'type'     => 'Старшая группа',
        'name'     => 'Еркетай',
        'children' => 25,
        'places'   => 0,
        'symbol'   => '♥',
        'color'    => 'pink',
    ),
    array(
        'type'     => 'Предшкольная группа',
        'name'     => 'Айналайын',
        'children' => 25,
        'places'   => 5,
        'symbol'   => '✿',
        'color'    => 'blue',
    ),
);
?>

<section class="balaqai-groups-section">
    <div class="balaqai-groups-inner">

        <div class="balaqai-groups-heading">
            <h2><?php echo esc_html($translate('Наши группы')); ?></h2>
            <p>
                <?php echo esc_html($translate(
                    'Возрастные группы и информация о свободных местах.'
                )); ?>
            </p>
        </div>

        <div class="balaqai-groups-grid">

            <?php foreach ($groups as $group) : ?>

                <article class="balaqai-group-card balaqai-group-card--<?php echo esc_attr($group['color']); ?>">

                    <div class="balaqai-group-main">

                        <div class="balaqai-group-icon" aria-hidden="true">
                            <?php echo esc_html($group['symbol']); ?>
                        </div>

                        <div class="balaqai-group-title">
                            <p class="balaqai-group-type">
                                <?php echo esc_html($translate($group['type'])); ?>
                            </p>

                            <h3>«<?php echo esc_html($group['name']); ?>»</h3>
                        </div>

                    </div>

                    <div class="balaqai-group-stats">

                        <div class="balaqai-group-stat">
                            <span>
                                <?php echo esc_html($translate('Количество детей')); ?>
                            </span>
                            <strong><?php echo esc_html($group['children']); ?></strong>
                        </div>

                        <div class="balaqai-group-stat balaqai-group-stat--places <?php echo $group['places'] === 0 ? 'is-full' : ''; ?>">
                            <span>
                                <?php echo esc_html($translate('Свободных мест')); ?>
                            </span>
                            <strong><?php echo esc_html($group['places']); ?></strong>
                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        <p class="balaqai-groups-note">
            <?php echo esc_html($translate(
                'Количество свободных мест может изменяться.'
            )); ?>
        </p>

    </div>
</section>