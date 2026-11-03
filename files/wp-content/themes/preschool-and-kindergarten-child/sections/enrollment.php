<?php
/**
 * Блок "Как поступить в детский сад"
 */
?>

<section class="balausa-enrollment">
    <div class="balausa-enrollment-inner">

        <h2><?php echo esc_html(pll__('Как поступить в детский сад')); ?></h2>

        <p class="balausa-enrollment-subtitle">
            <?php echo esc_html(pll__('Постановка в очередь и зачисление в дошкольную организацию осуществляются в электронной форме.')); ?>
        </p>

        <div class="balausa-enrollment-steps">

            <div class="balausa-enrollment-step">
                <div class="balausa-step-number">01</div>
                <h3><?php echo esc_html(pll__('Постановка в очередь')); ?></h3>
                <p><?php echo esc_html(pll__('Подайте электронное заявление для постановки ребёнка в очередь.')); ?></p>
            </div>

            <div class="balausa-enrollment-step">
                <div class="balausa-step-number">02</div>
                <h3><?php echo esc_html(pll__('Получите ваучер')); ?></h3>
                <p><?php echo esc_html(pll__('Дождитесь уведомления о предоставлении ваучера в электронной системе.')); ?></p>
            </div>

            <div class="balausa-enrollment-step">
                <div class="balausa-step-number">03</div>
                <h3><?php echo esc_html(pll__('Подтвердите ваучер')); ?></h3>
                <p><?php echo esc_html(pll__('Подтвердите согласие на использование ваучера в течение 2 рабочих дней.')); ?></p>
            </div>

            <div class="balausa-enrollment-step">
                <div class="balausa-step-number">04</div>
                <h3><?php echo esc_html(pll__('Выберите детский сад')); ?></h3>
                <p><?php echo esc_html(pll__('После подтверждения ваучера выберите организацию и оформите зачисление в течение 5 рабочих дней.')); ?></p>
            </div>

        </div>

        <div class="balausa-enrollment-bottom">

            <div class="balausa-enrollment-docs">
                <strong>
                    <?php echo esc_html(pll__('Подготовьте документы заранее')); ?>
                </strong>

                <p>
                    <?php echo esc_html(pll__('Удостоверение личности родителя или законного представителя, свидетельство о рождении ребёнка, паспорт здоровья, справку о состоянии здоровья и, при необходимости, заключение ПМПК.')); ?>
                </p>
            </div>

            <a class="balausa-enrollment-button"
               href="https://indigo24.kz/"
               target="_blank"
               rel="noopener">
                <?php echo esc_html(pll__('ПЕРЕЙТИ В INDIGO')); ?>
            </a>

        </div>

        <p class="balausa-enrollment-note">
            <?php echo esc_html(pll__('Порядок и сроки могут изменяться в соответствии с действующими правилами.')); ?>
        </p>

    </div>
</section>