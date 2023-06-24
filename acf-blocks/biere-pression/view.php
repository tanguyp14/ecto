<section class="biere-pression">
    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <h2><?php echo $titre; ?></h2>
    <div class="content">
        <span>25cl</span>
        <span>50cl</span>
        <span>1L</span>
        <?php foreach ($liste_des_bieres as $biere) :  extract($biere) ?>
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
                    <div class="demi">
                        <?php echo $prix_25cl ?>€
                    </div>
                    <div class="pinte">
                        <?php echo $prix_50cl ?>€
                    </div>
                    <div class="litre">
                        <?php echo $prix_1l ?>€
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>