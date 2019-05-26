<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="author" content="Bludit CMS">

	<!-- Dynamic title tag -->
	<?php echo Theme::metaTags('title') ?>

	<!-- Dynamic description tag -->
	<?php echo Theme::metaTags('description') ?>

	<!-- Include Favicon -->
	<?php echo Theme::favicon('img/favicon.png') ?>

	<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('assets/css/main.css') ?>

	<noscript>
	<?php echo Theme::css('assets/css/noscript.css') ?>
	</noscript>

	<!-- Load plugins -->
	<?php Theme::plugins('siteHead') ?>
</head>
<body class="is-preload">

	<!-- Load plugins -->
	<?php Theme::plugins('siteBodyBegin') ?>

	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">

		<!-- Intro -->
		<div id="intro">
			<h1><?php echo $site->title() ?></h1>
			<p><?php echo $site->description() ?></p>
			<ul class="actions">
				<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
			</ul>
		</div>

		<!-- Header -->
		<header id="header">
			<a href="<?php echo Theme::siteUrl() ?>" class="logo"><?php echo $site->title() ?></a>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul class="links">
				<li class="<?php echo ($WHERE_AM_I=='home')?'active':'' ?>"><a href="<?php echo Theme::siteUrl() ?>"><?php $language->p('Homepage') ?></a></li>
				<!-- Static pages -->
				<?php foreach ($staticContent as $staticPage): ?>
				<li class="<?php echo ($staticPage->permalink()==$page->permalink())?'active':'' ?>"><a href="<?php echo $staticPage->permalink() ?>#main"><?php echo $staticPage->title() ?></a></li>
				<?php endforeach ?>
			</ul>
			<ul class="icons">
				<!-- Social networks defined in init.php -->
				<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
					<?php if ($site->{$key}()): ?>
					<li><a href="<?php echo $site->{$key}() ?>" class="icon <?php echo 'fa-'.$key ?>"><span class="label"><?php echo $label ?></span></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
		<?php
			if ($WHERE_AM_I == 'page') {
				include(THEME_DIR.'page.php');
			} else {
				include(THEME_DIR.'home.php');
			}
		?>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<ul><li><?php echo $site->footer() ?></li><li>Powered by <a href="https://www.bludit.com">Bludit</a></li></ul>
		</div>

	</div>

	<!-- Scripts -->
	<?php echo Theme::jquery() ?>
	<?php echo Theme::js('assets/js/jquery.scrollex.min.js') ?>
	<?php echo Theme::js('assets/js/jquery.scrolly.min.js') ?>
	<?php echo Theme::js('assets/js/browser.min.js') ?>
	<?php echo Theme::js('assets/js/breakpoints.min.js') ?>
	<?php echo Theme::js('assets/js/util.js') ?>
	<?php echo Theme::js('assets/js/main.js') ?>

	<!-- Load plugins -->
	<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>