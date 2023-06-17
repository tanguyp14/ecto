<?php
function fouet_load_type()
{
    $html = '';
    $target = $_POST['target'];

    $args = array(
        'post_type'      => $target,
        'post_status'    => 'publish',
    );


    $query = new WP_Query($args);
    ob_start();
    while ($query->have_posts()) : $query->the_post();
        include_card_with_id(get_the_ID());
    endwhile;
    wp_reset_postdata();
    $html = ob_get_clean();

    wp_send_json_success($html);
}

add_action('wp_ajax_fouet_load_type', 'fouet_load_type');
add_action('wp_ajax_nopriv_fouet_load_type', 'fouet_load_type');


function fouet_load_gammes()
{
    $html = '';
    $target = $_POST['target'];
    ob_start();

    $subtype_names = array(
        'verres',
        'assiettes',
        'couverts',
        'tasses',
        'autres_vaisselles',
        'tables',
        'chaises',
        'autres_mobiliers',
        'serviettes',
        'nappes',
        'autres_linges'
    );
    foreach ($subtype_names as $item) :
            $args = array(
                'post_type'   => $item,
                'post_status' => 'publish',
                'gammes'   => $target,
            );
            $query = new WP_Query($args);

            $firstElement = true;
            $totalPosts = $query->found_posts;
            $counter = 0;
            while ($query->have_posts()) : $query->the_post();
                $counter++;
                if ($firstElement) {
                    echo '<div class="gammes">';
                    echo '<h3>' . reformat_value($item) . '</h3>';
                    $firstElement = false;
                }
                include_card_with_id(get_the_ID());

                if ($counter == $totalPosts) {
                    echo '</div>';
                }
            ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>

<?php endforeach;

    $html = ob_get_clean();



    wp_send_json_success($html);
}

add_action('wp_ajax_fouet_load_gammes', 'fouet_load_gammes');
add_action('wp_ajax_nopriv_fouet_load_gammes', 'fouet_load_gammes');
