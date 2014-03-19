<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }

require dirname(__FILE__).'/header.inc.php';
?>
<div class="row">
	<div class="col-md-12">
		<h1><?php get_page_title(); ?></h1>
		<?php get_page_content(); ?>
	</div>
</div>

<?php require dirname(__FILE__).'/footer.inc.php'; ?>
