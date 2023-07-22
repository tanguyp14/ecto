    <?php
    $fields = get_fields();
    extract($fields);
    ?>
<section id="<?php echo format_value($titre); ?>" class="sans-alcool">
    <h2><?php echo $titre; ?></h2>
    <article>
        <div class="prix"><?php echo $prix_sans_alcool; ?>€</div>
        <div class="content">
            <?php foreach ($exclusivites as $e) : extract($e) ?>
                <div class="item">
                    <h3><?php echo $nom; ?></h3>
                    <p><?php echo $composistion; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</section>