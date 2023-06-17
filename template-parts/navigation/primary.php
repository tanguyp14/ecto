<?php
/**
 * Primary menu template part
 */    
?>   

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary', 'ectobar' ); ?>">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu',
                'menu_id'        => 'primary-menu',
            )
        );
    ?>
</nav><!-- #site-navigation -->