<?php

// Fonction de création des custom post types
function register_gammes_taxonomy()
{
    $labels = array(
        'name' => 'Gammes',
        'singular_name' => 'Gamme',
        'menu_name' => 'Gammes',
        'all_items' => 'All Gammes',
        'edit_item' => 'Edit Gamme',
        'view_item' => 'View Gamme',
        'add_new_item' => 'Add New Gamme',
        'new_item_name' => 'New Gamme',
        'search_items' => 'Search Gammes',
        'popular_items' => 'Popular Gammes',
        'not_found' => 'No gammes found.',
        'separate_items_with_commas' => 'Separate gammes with commas',
        'add_or_remove_items' => 'Add or remove gammes',
        'choose_from_most_used' => 'Choose from the most used gammes',
        'not_found_in_trash' => 'No gammes found in trash.',
        'parent_item' => 'Parent Gamme'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true, // Set to false if you want a non-hierarchical taxonomy like tags
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'gammes'), // Change the slug to your desired URL structure
    );

    register_taxonomy('gammes', 'none', $args); // 'post' represents the post type to which this taxonomy should be applied (can be changed)

}
add_action('init', 'register_gammes_taxonomy');

// Enregistrement des sous-types de "Vaisselles"
function register_vaisselles_subtypes()
{
    $subtypes = array(
        'verres' => 'Verres',
        'assiettes' => 'Assiettes',
        'couverts' => 'Couverts',
        'tasses' => 'Tasses',
        'autres_vaisselles' => 'Autres Vaisselles'
    );

    foreach ($subtypes as $slug => $label) {
        $labels = array(
            'name' => $label,
            'singular_name' => $label,
            'menu_name' => $label
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => false,
            'taxonomies'  => array('gammes','post_tag'),
            'rewrite' => array('slug' => $slug),
            'publicly_queryable'  => false,
            'supports' => array('title', 'thumbnail')
        );

        register_post_type($slug, $args);
        add_filter('manage_' . $slug . '_posts_columns', 'add_thumbnail_column');
        add_action('manage_' . $slug . '_posts_custom_column', 'display_thumbnail_column', 10, 2);
    }
}
add_action('init', 'register_vaisselles_subtypes');

// Enregistrement des sous-types de "Mobiliers"
function register_mobiliers_subtypes()
{
    $subtypes = array(
        'tables' => 'Tables',
        'chaises' => 'Chaises',
        'autres_mobiliers' => 'Autres Mobiliers'
    );

    foreach ($subtypes as $slug => $label) {
        $labels = array(
            'name' => $label,
            'singular_name' => $label,
            'menu_name' => $label
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => $slug),
            'taxonomies'  => array('gammes','post_tag'),
            'publicly_queryable'  => false,
            'supports' => array('title', 'thumbnail')
        );

        register_post_type($slug, $args);
        add_filter('manage_' . $slug . '_posts_columns', 'add_thumbnail_column');
        add_action('manage_' . $slug . '_posts_custom_column', 'display_thumbnail_column', 10, 2);
    }
}
add_action('init', 'register_mobiliers_subtypes');

// Enregistrement des sous-types de "Linges"
function register_linge_subtypes()
{
    $subtypes = array(
        'serviettes' => 'Serviettes',
        'nappes' => 'Nappes',
        'autres_linges' => 'Autres Linges'
    );

    foreach ($subtypes as $slug => $label) {
        $labels = array(
            'name' => $label,
            'singular_name' => $label,
            'menu_name' => $label
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => $slug),
            'taxonomies'  => array('gammes','post_tag'),
            'publicly_queryable'  => false,
            'supports' => array('title', 'thumbnail')
        );

        register_post_type($slug, $args);
        add_filter('manage_' . $slug . '_posts_columns', 'add_thumbnail_column');
        add_action('manage_' . $slug . '_posts_custom_column', 'display_thumbnail_column', 10, 2);
    }
}
add_action('init', 'register_linge_subtypes');
// Ajoute les vignettes aux colonnes de l'administration des CPT


function add_thumbnail_column($columns)
{
    $columns['thumbnail'] = 'Thumbnail';
    return $columns;
}

// Function to display the thumbnail in the column
function display_thumbnail_column($column, $post_id)
{
    if ($column === 'thumbnail') {
        echo get_the_post_thumbnail($post_id, 'thumbnail');
    }
}

function get_subtype_name_by_radio_value($radio_value) {
    $subtype_names = array();

    // Check the value of the radio button field
    if ($radio_value === 'vaisselles') {
        $subtypes = array(
            'verres' => 'Verres',
            'assiettes' => 'Assiettes',
            'couverts' => 'Couverts',
            'tasses' => 'Tasses',
            'autres_vaisselles' => 'Autres Vaisselles'
        );
    } elseif ($radio_value === 'mobiliers') {
        $subtypes = array(
            'tables' => 'Tables',
            'chaises' => 'Chaises',
            'autres_mobiliers' => 'Autres Mobiliers'
        );
    } elseif ($radio_value === 'linges') {
        $subtypes = array(
            'serviettes' => 'Serviettes',
            'nappes' => 'Nappes',
            'autres_linges' => 'Autres Linges'
        );
    }

    // Get the names of the subtypes
    if (isset($subtypes)) {
        $subtype_names = array_values($subtypes);
    }

    return $subtype_names;
}
