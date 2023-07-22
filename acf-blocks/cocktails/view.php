    <?php
    $fields = get_fields();
    extract($fields);
    ?>
<section id="<?php echo format_value($titre); ?>" class="cocktails">
    <h2><?php echo $titre; ?></h2>
    <article class="exclus">
        <div class="roll-container-exclu">
            <div class="roll back"></div>
            <div class="roll">
                <span>exclusivité maison&thinsp;-&thinsp;</span><span>exclusivité maison&thinsp;-&thinsp;</span>
            </div>
        </div>
        <div class="prix"><?php echo $prix_exclusivite; ?>€</div>
        <div class="content">
            <?php foreach ($exclusivites as $e) : extract($e) ?>
                <div class="item">
                    <h3><?php echo $nom; ?></h3>
                    <p><?php echo $composistion; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
    <article class="classiques">
        <div class="prix"><?php echo $prix_classique; ?>€</div>
        <div class="content">
            <?php foreach ($classiques as $e) : extract($e) ?>
                <div class="item">
                    <h3><?php echo $nom; ?></h3>
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
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</section>