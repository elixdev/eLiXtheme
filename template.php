<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         template.php
* @Package:      GetSimple
* @Action:       eLiXtheme theme for GetSimple CMS
*
*****************************************************/

require dirname(__FILE__).'/header.inc.php';
?>
<div class="row content">
	<div class="col-md-8">
	  <h1><?php get_page_title(); ?></h1>
	  <?php get_page_content(); ?>
	</div>
	<div class="col-md-4">
	  <?php get_component('sidebar'); ?>
	</div>
</div>

<?php require dirname(__FILE__).'/footer.inc.php'; ?>
