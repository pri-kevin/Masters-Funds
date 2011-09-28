<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
</head>

<body>

<div id="above" class="clear-block"></div>

<div id="page">

	<div id="masthead">
	<div id="header2">

		<div id="header" class="clear-block">
			<div class="header-right">
				<div class="header-left">
				<div id="logo">
					<?php if ($logo): ?>
						<a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>">
							<img src="<?php print $logo ?>" alt="<?php print t('Home'); ?>" />
						</a>
					<?php endif; ?>
				</div> <!-- /logo --> 
					<div id="name-and-slogan">
					<?php if ($site_name): ?>
						<h1 id="site-name">
							<a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>">
								<?php print $site_name ?>
							</a>
						</h1>
					<?php endif; ?>
					<?php if ($site_slogan): ?>
						<div id="site-slogan">
							<?php print $site_slogan ?>
						</div>
					<?php endif; ?>
					</div> <!-- /name-and-slogan -->
				</div> <!-- /header-left -->
			</div> <!-- /header-right -->
		</div> <!-- /header -->

	</div>
	</div>

	<div id="prenav"></div>

	<div id="postnav"></div>

<div id="middlecontainer">
<div id="offline">
	<div id="content">
		<div id="main">
			<h1 class="title"><?php print $title ?></h1>
			<div class="tabs"><?php print $tabs ?></div>
			<?php print $help ?>
			<?php if ($show_messages) { print $messages; } ?>
			<?php print $content ?>
			<?php print $feed_icons ?>
		</div>
	</div>
</div>
</div>

<div id="footer-wrapper" class="clear-block">
	<div id="bar2"></div>
	<div id="footer">
			<div class="legal">
				Copyright &copy; <?php print date('Y') ?> <a href="/"><?php print $site_name ?></a>
				<div id="brand"></div>
			</div>
			<div class="by">
				<em>by</em> <a href="http://www.radut.net/"> Dr. Radut</a>
			</div>
	</div>
	<div class="footer-right">
		<div class="footer-left">
		</div> <!-- /footer-left -->
	</div> <!-- /footer-right -->
</div> <!-- /footer-wrapper -->

<div id="shadow" class="clear-block">
	<div class="shadow-right">
		<div class="shadow-left">
		</div>
	</div>
</div>

</div>

<?php print $closure ?>
</body>
</html>
