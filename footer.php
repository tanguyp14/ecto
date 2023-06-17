<a href="#main-content" class="back-top hide" alt="Back to top" title="Retour en haut de page"></a>
		</main><!-- /#main-content -->

		<footer role="contentinfo">
			<div class="bottom-bar">
				<p>	<?php $struct = get_field('structure', 'option');
				extract($struct); ?>
					&copy; <?php echo $denomination ?> - <?php echo date("Y"); ?> -
					<?php $pixelea = get_field('creation_developpement_site', 'option');
					extract($pixelea); ?>
					<?php $field = get_field_object('creation_developpement_site', 'option'); ?>
					<?php echo $field['label']; ?> :
					<a href="<?= $site_web ?>"> <?= $denomination ?></a>
				</p>
			</div>
		</footer>
		<?php wp_footer(); ?>
		</body>

		</html>