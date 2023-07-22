    <?php
    $fields = get_fields();
    extract($fields);
    ?>
<section id="<?php echo format_value($titre); ?>" class="arranges" id="arranges">
    <h2><?php echo $titre; ?></h2>
    <div class="rhum">
        <?php extract($rhum); ?>
        <div class="prix">
            <div class=" prix_left">
                <p>3cl</p>
                <p class="p"><?php echo $prix_3cl; ?>€</p>
            </div>
            <div class="prix_right">
                <p>5cl</p>
                <p class="p"><?php echo $prix_5cl; ?>€</p>
            </div>
        </div>

        <div class="content">
            <ul>
                <?php foreach ($liste as $r) : extract($r) ?>
                    <li><?php echo $recette; ?></li>
                <?php endforeach; ?>
            </ul>
            <article class="ti-punch">
                <div class="attributes">
                    <h3>Ti Punch</h3>
                    <span class="type">5cl</span>
                    <span><?php echo $ti_punch; ?>€</span>
                </div>
            </article>
        </div>
    </div>
    <div class="calva">
        <?php extract($calva); ?>
        <?php extract($rhum); //Clone 
        ?>
        <div class="prix">
            <div class=" prix_left">
                <p>3cl</p>
                <p class="p"><?php echo $prix_3cl; ?>€</p>
            </div>
            <div class="prix_right">
                <p>5cl</p>
                <p class="p"><?php echo $prix_5cl; ?>€</p>
            </div>
        </div>

        <div class="content">
            <ul>

                <?php foreach ($liste as $c) : extract($c) ?>
                    <li><?php echo $recette; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>