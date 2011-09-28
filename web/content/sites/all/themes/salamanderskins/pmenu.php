	<div id="navigation" class="menu">
	<?php if ($primary_links): ?>
		<div id="primary" class="clear-block">
			<div class="navcont"><?php print theme('links', $primary_links, array()); ?></div>
		</div>
	<?php endif; ?>
	<?php if ($secondary_links): ?>
		<div id="secondary" class="clear-block">
			<div class="navcont"><?php print theme('links', $secondary_links, array()); ?></div>
		</div>
	<?php endif; ?>
	</div>