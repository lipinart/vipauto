<?php
/**
 * @file header.inc.php
 * Шапка сайта: логотип и основное меню
 * Видимость: на всех страницах
 */
?>
<header>
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-xs-2 hidden-sm hidden-md hidden-lg">
				<!-- Only small device-->
				<button type="button" class="navbar-toggle collapse-toggle" data-toggle="#main-menu"><i class="icon-menu"> </i></button>
			</div>
			<div class="col-xs-8 col-sm-7 col-md-4">
				<a class="">
					<img src="logo.png" class="brand img-responsive" />
				</a>
			</div>
			<div class="col-xs-2 hidden-lg hidden-sm hidden-md">
				<!-- Only small device-->
				<button type="button" onclick="location.href='tel:+7(495) 233-66-96'" class="call-toggle"><i class="icon-phone"> </i></button>
			</div>
			<div class="hidden-xs hidden-sm col-md-4 col-lg-5">
				<!-- Здесь планировался вывод поздравлений (невиден на узких экранах)-->
			</div>
			<div class="hidden-xs col-sm-5 col-md-4 col-lg-3">
				<ul class="navbar-right">
					<li>
						<div class="dropdown">
						  <a class="dropdown-toggle nav-right" id="dropdown" data-toggle="dropdown">
							<i class="icon-map-pin"> </i><i class="pull-right icon-arrow-down"></i> Эвакуатор круглосуточно</i>
						  </a>
						  <ul class="dropdown-menu pull-right">
							<li><a href="index.php?id=in_moscow">Эвакуатор в Москве</a></li>
							<li><a href="index.php?id=out_moscow">Эвакуатор в Московской области</a></li>
						  </ul>
						</div>
					</li>
		
					<li>
						<a class="nav-right phone" href="tel:+7(495) 233-66-96"><i class="icon-phone"> </i> +7(495) 233-66-96</a>
						<span class="text-outdown">Многоканальный. Круглосуточно. Без&nbsp;выходных.</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- end row -->
	</div>
	
	<!-- main-menu -->
	<nav id="main-menu" class="navbar navbar-default navbar-header">
		<div class="container">
			<ul class="nav">
				<li><a href="index.php?id=home" title="Заказать эвакуатор">Заказать эвакуатор</a></li>
				<li><a href="index.php?id=promo-page" title="Эвакуатор бесплатно">Эвакуатор бесплатно</a></li>
				<li><a href="index.php?id=partner" title="Заказать эвакуатор">Cпецпредложения</a></li>
			</ul>
		</div>
	</nav>
	<!-- end main-menu -->
</header>