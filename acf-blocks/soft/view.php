    <?php
    $fields = get_fields();
    extract($fields);
    ?>
<section id="<?php echo format_value($titre); ?>" class="soft">
    <h2><?php echo $titre; ?></h2>
    <div class="content">
        <?php foreach ($liste as $l) :  extract($l) ?>
            <article class="<?php echo format_value($nom); ?>">
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
                <?php if ($composistion) : ?>
                    <p class="compo"><?php echo $composistion; ?></p>
                <?php endif; ?>
                <div class="prix">
                    <?php echo $prix ?>€
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>