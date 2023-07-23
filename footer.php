<a href="#masthead" class="back-top hide" alt="Back to top" title="Retour en haut de page"></a>
</main><!-- /#main-content -->

<footer role="contentinfo">
	<div class="pre-footer"><span></span></div>
	<div class="bottom-bar">
		<span> <?php $struct = get_field('structure', 'option');
				extract($struct); ?>
			&nbsp;- &copy; <?php echo $denomination ?> - <?php echo date("Y"); ?> -
			<?php $hatsu = get_field('creation_developpement_site', 'option');
			extract($hatsu); ?>
			<?php $field = get_field_object('creation_developpement_site', 'option'); ?>
			<?php echo $field['label']; ?> :
			<a alt="hatsumei" href="<?= $site_web ?>"> <?= $denomination ?></a> - <a alt="Mentions Légales" href="/mentions-legales">Mentions légales</a> 
		</span>
		<span> <?php $struct = get_field('structure', 'option');
				extract($struct); ?>
			&nbsp;- &copy; <?php echo $denomination ?> - <?php echo date("Y"); ?> -
			<?php $hatsu = get_field('creation_developpement_site', 'option');
			extract($hatsu); ?>
			<?php $field = get_field_object('creation_developpement_site', 'option'); ?>
			<?php echo $field['label']; ?> :
			<a alt="hatsumei" href="<?= $site_web ?>"> <?= $denomination ?></a> - <a alt="Mentions Légales" href="/mentions-legales">Mentions légales</a> 
		</span>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>