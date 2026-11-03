<?php
/**
 * Дополнительное меню на главной странице
 */

$is_kz = function_exists('pll_current_language') && pll_current_language('slug') === 'kk';

$menu_name = 'боковое меню';

if ($is_kz) {
    $menu_name = 'боковое меню KZ';
}
?>

<section class="home-extra-navigation-section">
    <div class="home-extra-navigation">

        <?php
        wp_nav_menu(
            array(
                'menu'            => $menu_name,
                'container'       => false,
                'menu_class'      => 'home-extra-menu',
                'fallback_cb'     => false,
            )
        );
        ?>

    </div>
</section>