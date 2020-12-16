<div class="banner text-center text-white">
	<div class="d-inline-block text-left">
		<?php if(isset($title)): ?>
		<div class="bg-secondary px-2 py-1"><h4 class="m-0"><?php echo $title; ?></h4></div>
		<?php endif;
			if(isset($subtitle)): ?>
		<div class="bg-secondary px-2 py-1 d-inline-block"><small class="m-0"><?php echo $subtitle; ?></small></div>
		<?php endif; ?>
	</div>
</div>
<?php unset($title,$subtitle); ?>
