<?php

/**
 * Primary menu template part
 */
?>

<nav id="site-navigation" class="main-navigation " role="navigation" aria-label="<?php esc_attr_e('Primary', 'ectobar'); ?>"><span class="menu-toggle"><span class="icon"></span></span>
    <div class="in-menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu',
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
        <div class="logo-menu"><span></span></div>
        <div class="contact">
            <?php $struct = get_field('structure', 'option');
            extract($struct); ?>
            <h4><?php echo $denomination; ?></h4>
            <span>Apéritif de qualité depuis 2014</span>
            <span class="blue"><?php echo $adresse; ?></span>
            <span><?php echo $code_postal; ?> - <?php echo $commune; ?></span>
            <span class="blue">14h - 01h</span>
            <span>Fin du service à 00h30</span>
        </div>
    </div>
</nav><!-- #site-navigation -->