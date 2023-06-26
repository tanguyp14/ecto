<section class="biere-bouteille">
    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <h2><?php echo $titre; ?></h2>
    <div class="locales">
        <div class="content">
            <?php foreach ($locales as $local) :  extract($local) ?>
                <article class="<?php echo format_value($nom); ?> <?php echo format_value($type_special); ?>">
                    <h3 class="nom"><?php echo $nom; ?></h3>
                    <?php if ($sous_titre) : ?>
                        <div class="attributes">
                            <?php foreach ($sous_titre as $item) : extract($item) ?>
                                <span class="type <?php echo $texte; ?>" style="
                        background-color:<?php echo $couleur_interne ?>;
                        color:<?php echo $couleur_texte ?>;
                        border-color:<?php echo $border_color ?>;
                        ">
                                    <?php echo $texte; ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="prix">
                        <?php echo $prix_33cl ?>€
                    </div>
                    <?php if ($image) : ?>
                        <div class="image">
                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="classique">
        <div class="content">
            <?php foreach ($classique as $classik) :  extract($classik) ?>
                <?php foreach ($classik as $item) :  extract($item) ?>
                    <article class="<?php echo format_value($nom); ?> <?php echo format_value($type_special); ?>">
                        <h3 class="nom"><?php echo $nom; ?></h3>
                        <?php if ($sous_titre) : ?>
                            <div class="attributes">
                                <?php foreach ($sous_titre as $item) : extract($item) ?>
                                    <span class="type <?php echo $texte; ?>" style="
                        background-color:<?php echo $couleur_interne ?>;
                        color:<?php echo $couleur_texte ?>;
                        border-color:<?php echo $border_color ?>;
                        ">
                                        <?php echo $texte; ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div class="prix">
                            <?php echo $prix_33cl ?>€
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>