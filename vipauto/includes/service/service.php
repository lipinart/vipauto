<?php
include("parser.php");//парсит текстовый файл и готовит разметку внутр. табов
?>
<div class="row">
<div class="col-sm-9 col-md-8 col-lg-7">
<div class="parent-tabs-panels">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#panel-cars"><i class="icon-car"> </i></a></li>
		<li><a href="#panel-motos"><i class="icon-bike"> </i></a></li>
		<li><a href="#panel-trucks"><i class="icon-truck"> </i></i></a></li>
		<li><a href="#panel-elite"><i class="icon-supercar"> </i></a></li>
		<li><a href="#panel-special"><i class="icon-trucktor"> </i></a></li>
		<li><a href="#panel-trans"><i class="icon-car-trans"> </i></a></li>
		<li><a href="#panel-trans2"><i class="icon-car-trans-2"> </i></a></li>
		<li><a href="#panel-manipul"><i class="icon-manipulator"> </i></a></li>
		<li><a href="#panel-help"><i class="icon-service"> </i></a></li>
	</ul>
	<ul class="tabs-panels">
		<li id="panel-cars" class="panel-content">
			<h3>Эвакуация леговых автомобилей</h3>
			<?php get_service("cars"); //легковые?>
		</li>
		<li id="panel-motos" class="panel-content">
		<h3>Эвакуация мототехники</h3>
			<?php get_service("motos"); //мотоциклы?>
		</li>
		<li id="panel-trucks" class="panel-content">
		<h3>Эвакуация грузовых автомобилей и автобусов</h3>
			<?php get_service("trucks"); //грузовые?>
		</li>
		<li id="panel-elite" class="panel-content">
			<h3>Эвакуация элитных автомобилей</h3>
			<?php get_service("elite"); //суперкары?>
		</li>
		<li id="panel-special" class="panel-content">
			<h3>Эвакуация плавсредств и спецтехники</h3>
			<?php get_service("special"); //спецтранспорт?>
		</li>
		<li id="panel-trans" class="panel-content">
			<h3>Автовоз <small> (цены указаны на 1 место)</small></h3>
			<?php get_service("trans"); //автовоз?>
		</li>
		<li id="panel-trans2" class="panel-content">
			<h3>Эвакуация 2-х леговых автомобилей одновременно</h3>
			<?php get_service("trans2"); //2этажный эвакуатор?>
		</li>
		<li id="panel-manipul" class="panel-content">
			<h3>Кран-манипулятор</h3>
			<?php get_service("manipul"); //манипулятор?>
		</li>
		<li id="panel-help" class="panel-content">
			<h3>Техпомощь</h3>
			<?php get_service("help"); //техпомощь?>
		</li>
	</ul>
	<div class="clearfix"></div>
</div>
</div>
<div class="col-sm-3 col-md-4 col-lg-5">
<h3 class="page-header"><i class="pull-right icon-arrow-down"></i>Стоимость дополнительных услуг</h3>
<table class="table table-striped">
  <thead>
	<tr>
	  <th>Услуга</th>
	  <th>Стоимость</th>
	</tr>
  </thead>
  <tbody>
	<tr>
	  <td>Переадресация эвакуатора</td>
	  <td>1 000 р.</td>
	</tr>
	<tr>
	  <td>Ожидание по вине заказчика (первые 15 мин. не тарифицируются)</td>
	  <td>500 р./час</td>
	</tr>
	<tr>
	  <td>Ложный вызов (вызов без транспортировки)</td>
	  <td>50 % от стоимости заказа</td>
	</tr>
	<tr>
	  <td>Транспортировка без сопровождения</td>
	  <td>500 р.</td>
	</tr>
	<tr>
  </tbody>
</table>
</div>
</div>