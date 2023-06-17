<section class="big_slider">
    <?php
    $fields = get_fields();
    extract($fields);
    foreach ($slides as $slide) : ?>
        <?php extract($slide); ?>
        <div class="slide">
            <?php echo wp_get_attachment_image($image_darriere_plan, 'full'); ?>
            <div class="cover" style="background-color: <?php echo $couleur ?>;"></div>
            <div class="text">
                <h1 class="intro"><?php echo $zone_de_texte ?></h1>
                <?php if (!empty($texte_bulle)) : ?>
                    <p class="button bulle"><?php echo $texte_bulle ?></p>
                <?php endif; ?>
            </div>
        </div>

    <?php endforeach; ?>
</section>