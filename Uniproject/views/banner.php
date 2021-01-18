<div class="banner text-center text-white">
	<div class="d-inline-block text-left">
		<?php if(isset($args[0])): ?>
		<div class="bg-secondary px-2 py-1"><h4 class="m-0"><?php echo $args[0]; ?></h4></div>
		<?php endif;
		if(isset($args[1])): ?>
		<div class="bg-secondary px-2 py-1 d-inline-block"><small class="m-0"><?php echo $args[1]; ?></small></div>
		<?php endif; ?>
	</div>
</div>
