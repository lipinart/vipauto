<?php
/**
 * @file parser.inc.php
 * Функция get_service() - вызывается из service.inc.php, парсит файл price.php,
 * формирует из него многомерный массив и в зависимости от параметра $type
 * передает массив в функцию get_html(), где генерируется html-обертка. 
 * Упрощает вывод всех позиций, указанных в прайсе.
 */
function get_html($service, $type){
		$li = '<!-- Panels navigation -->
				<div class="tabs-corousel">
					<ul class="nav nav-tabs-slider">
					';
					foreach($service[$type] as $t_key => $tab_data){//формируем разметку табов
						$li .= '<li>
							<a href='.'#'.$type.'-'.$t_key.'>
								<img src='.'includes/service/img/'.$t_key.'.png'.'>
								<span>'.$tab_data["name"].'</span>
							</a>
							<div class="slide-arrow">
								<span class="arrow-down"></span>
							</div>
						</li>
						';
					}
			$li .= '</ul>
					<!-- Carousel controls -->
					<a class="btn-control prev"><i class="icon-arrow-left"></i></a>
					<a class="btn-control next"><i class="icon-arrow-right"></i></a>
					<!-- /end Carousel controls -->
				</div>
		<!-- /end Panels navigation -->
		';
		$panels = '<!-- Tabs content -->';
		foreach($service[$type] as $p_key => $panel_data){//формируем разметку вкладок
				$panels .= '<div id="'.$type.'-'.$p_key.'" class="tab-content">
					<div class="bigprice">
						<span>0<i class="icon-ruble"></i></span>
						<span class="small">подача бесплатно</span>
					</div>
					<table class="table">
						<tr><td>В Москве:</td><td>'.$panel_data["pin"].' руб.</td></tr>
						<tr><td>За МКАД:</td><td>'.$panel_data["pout"].' руб/км</td></tr>
					</table>
					<div class="divider"></div>
					<a class="btn btn-default" data-target="#form-order-modal" data-toggle="modal" href="#form-order-modal">Заказать</a> или 
					<a href="tel:+7(495) 233-66-96" class="btn btn-danger"><i class="icon-phone"> </i></a>
				</div>
				';
		}
		$panels .= '<!-- /end Tabs content -->';

	return print($li.$panels);
}
function get_service($type){
    $service = array();
    $import_file = file_get_contents("prise.php", true); //получаем данные из файла
    $import = explode(";", $import_file);// создаем массив строк
    foreach ($import as $part) { 
        $arr = explode('/',$part);// создаем из каждой строки массив
        $service[trim($arr[0])][trim($arr[1])]['name'] = trim($arr[2]);
        $service[trim($arr[0])][trim($arr[1])]['pin'] = trim($arr[3]);
        $service[trim($arr[0])][trim($arr[1])]['pout'] = trim($arr[4]);
		//получаем многомерный ассоциативный массив
    }
    
	return get_html($service, $type);// функция генерация разметки, см. выше
}
?>