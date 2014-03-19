<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
	<hr>
	<footer>
		<p class="footer-text">Copyright &copy; <?= date('Y');?> <?php get_site_name(); ?></p>
	</footer>
</div> <!-- /container -->

<script src="<?php get_theme_url(); ?>/js/jquery.js"></script>
<script src="<?php get_theme_url(); ?>/js/bootstrap.js"></script>
<script src="<?php get_theme_url(); ?>/js/magnific-popup.js"></script>
<script src="<?php get_theme_url(); ?>/js/scrollup.js"></script>
<script src="<?php get_theme_url(); ?>/js/script.js"></script>
<script>
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
var msViewportStyle = document.createElement("style")
msViewportStyle.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}"))
document.getElementsByTagName("head")[0].appendChild(msViewportStyle)}
</script>
<?php get_footer(); ?>
</body>
</html>
