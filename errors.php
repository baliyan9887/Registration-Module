
<!-- Count your error that you are faced during sign-up or login -->

<?php if (count($errors) > 0): ?>
	<div class="errors">
		<?php foreach ($errors as $errors): ?>
			<p><?php echo $errors; ?></p>
		<?php endforeach ?>


	</div>
<?php endif ?>