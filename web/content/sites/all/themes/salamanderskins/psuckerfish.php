	<div id="navigation" class="menu">
		<div id="suckerfish-container" class="clear-block">
			<div class="navcont">
				<div id="suckerfishmenu"><?php print $suckerfish ?></div>
			</div>
		</div>
	<?php if ($secondary_links): ?>
		<div id="secondary" class="clear-block">
			<div class="navcont"><?php print theme('links', $secondary_links, array()); ?></div>
		</div>
	<?php endif; ?>
	</div>