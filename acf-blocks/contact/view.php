<section class="contact">
    <?php $struct = get_field('structure', 'option');
    extract($struct); ?>
    <h4><?php echo $denomination; ?></h4>
    <span>Apéritif de qualité depuis 2014</span>
    <span class="blue"><?php echo $adresse; ?></span>
    <span><?php echo $code_postal; ?> - <?php echo $commune; ?></span>
    <span class="blue">15h - 01h</span>
    <span>Fin du service à 00h30</span>
</section>