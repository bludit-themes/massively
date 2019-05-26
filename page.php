<?php defined('BLUDIT') or die('Bludit CMS.'); ?>

<!-- Post -->
<section class="post">
	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>
	<header class="major">
		<span class="date"><?php echo $page->date() ?></span>
		<h1><?php echo $page->title() ?></h1>
		<p><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme.':$page->description()) ?></p>
	</header>
	<div class="image main"><img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('images/default.svg')) ?>" alt="<?php echo $page->title() ?>" /></div>
	<?php echo $page->content() ?>
	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>
</section>
