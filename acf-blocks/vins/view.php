<section class="vins">
    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <h2><?php echo $titre; ?></h2>
    <div class="content">
        <?php foreach ($types_de_vins as $i) : extract($i) ?>
            <div class="<?php echo format_value($categorie) ?>">
                <span>12.5cl</span>
                <span>75cl</span>
                <?php foreach ($noms as $n) : extract($n) ?>
                    <article>
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
                        <span class="prix verre"><?php echo $prix_verre; ?>€</span>
                        <span class="prix bout"><?php echo $prix_bout; ?>€</span>
                    </article>
                <?php endforeach; ?>

            </div>
        <?php endforeach; ?>
    </div>
</section>