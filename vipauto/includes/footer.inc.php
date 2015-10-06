<?php
/**
 * @file footer.inc.php
 * Футер или подвал
 * Видимость: на всех страницах
 */
?>
<footer>
	<nav class="navbar navbar-footer">
		<div class="container">
			<ul class="nav pull-right">
				<li><a href="index.php?id=sitemap" title="Карта сайта"><i class="icon-sitemap"> </i></a></li>
				<li><a href="index.php?id=example" title="Language">RU/EN</a></li>
			</ul>
			<ul class="nav">
				<li><a href="index.php?id=about" title="О компании">О компании</a></li>
				<li><a href="index.php?id=contact" title="Контакты">Контакты</a></li>
				<li><a href="index.php?id=example" title="Публичная аферта">Публичная аферта</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<ul class="text-center list-inline">
		<li>Администрация сайта: <a href="mailto:info@vipevakuator-msk.ru">info@vipevakuator-msk.ru</a></li>
		<li>© 2013-2015 | VIP AUTO</li>
		<li>® Все права защищены</li>
		</ul>
	</div>
</footer>

<!-- Modals -->
<?php include "includes/forms/form-order-modal.inc.php";?>
<?php include "includes/forms/form-job-modal.inc.php";?>
<!-- end Modals -->