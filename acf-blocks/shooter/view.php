    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section id="<?php echo format_value($titre); ?>" class="shooter">
        <h2><?php echo $titre; ?></h2>
        <div class="content">
            <span>5cl</span>
            <?php foreach ($liste as $l) :  extract($l) ?>
                <article class="<?php echo format_value($nom); ?>">
                    <h3 class="nom"><?php echo $nom; ?></h3>
                    <?php if ($sous_titre) : ?>
                        <p class="sous-titre"><?php echo $sous_titre; ?></p>
                    <?php endif; ?>
                    <div class="prix">
                        <?php echo $prix ?>€
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>