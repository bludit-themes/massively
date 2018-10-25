<?php defined('BLUDIT') or die('Bludit CMS.'); ?>

<!-- Featured Post only in first page -->
<?php if (Paginator::currentPage()==1): ?>
<?php $firstPage = array_shift($content) ?>
<article class="post featured">
	<header class="major">
		<span class="date"><?php echo $firstPage->date() ?></span>
		<h2><a href="<?php echo $firstPage->permalink() ?>#main"><?php echo $firstPage->title() ?></a></h2>
		<p><?php echo (empty($firstPage->description())?'Complete the description of the article for a correct work of the theme.':$firstPage->description()) ?></p>
	</header>
	<a href="<?php echo $firstPage->permalink() ?>#main" class="image main"><img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('images/default.svg')) ?>" alt="<?php echo $firstPage->title() ?>" /></a>
	<ul class="actions special">
		<li><a href="<?php echo $firstPage->permalink() ?>#main" class="button large"><?php $language->p('Read more') ?></a></li>
	</ul>
</article>
<?php endif ?>

<!-- Posts -->
<section class="posts">
	<?php foreach ($content as $page): ?>
	<article>
		<header>
			<span class="date"><?php echo $page->date() ?></span>
			<h2><a href="<?php echo $page->permalink() ?>#main"><?php echo $page->title() ?></a></h2>
		</header>
		<a href="<?php echo $page->permalink() ?>#main" class="image fit"><img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('images/default.svg')) ?>" alt="<?php echo $page->title() ?>" /></a>
		<p><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme.':$page->description()) ?></p>
		<ul class="actions special">
			<li><a href="<?php echo $page->permalink() ?>#main" class="button"><?php $language->p('Read more') ?></a></li>
		</ul>
	</article>
	<?php endforeach ?>
</section>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<footer>
	<div class="pagination">
		<?php if (Paginator::showPrev()): ?>
		<a href="<?php echo Paginator::previousPageUrl() ?>#main" class="previous"><?php $language->p('Previous page') ?></a>
		<?php endif ?>

		<?php if (Paginator::showNext()): ?>
		<a href="<?php echo Paginator::nextPageUrl() ?>#main" class="next"><?php $language->p('Next page') ?></a>
		<?php endif ?>
	</div>
</footer>
<?php endif ?>
