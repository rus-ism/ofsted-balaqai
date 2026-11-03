<?php
/**
 * Показатели детского сада «Балақай»
 */

$translate = static function ($text) {
    return function_exists('pll__') ? pll__($text) : $text;
};

$metrics = array(
    array(
        'value' => '3',
        'label' => 'Возрастные группы',
        'color' => 'blue',
        'icon'  => '✦',
    ),
    array(
        'value' => '75',
        'label' => 'Всего детей',
        'color' => 'pink',
        'icon'  => '♥',
    ),
    array(
        'value' => '19',
        'label' => 'Свободных мест',
        'color' => 'green',
        'icon'  => '★',
    ),
);
?>

<section class="balaqai-facts-section">
    <div class="balaqai-facts-inner">

        <h2>
            <?php echo esc_html($translate('Балақай в цифрах')); ?>
        </h2>

        <div class="balaqai-facts-grid">

            <?php foreach ($metrics as $metric) : ?>

                <article class="balaqai-fact-card balaqai-fact-card--<?php echo esc_attr($metric['color']); ?>">

                    <div class="balaqai-fact-icon" aria-hidden="true">
                        <?php echo esc_html($metric['icon']); ?>
                    </div>

                    <div class="balaqai-fact-content">
                        <strong>
                            <?php echo esc_html($metric['value']); ?>
                        </strong>

                        <span>
                            <?php echo esc_html($translate($metric['label'])); ?>
                        </span>
                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        <p class="balaqai-facts-note">
            <?php echo esc_html($translate('Количество свободных мест может изменяться.')); ?>
        </p>

    </div>
</section>