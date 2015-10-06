<?php
/**
 * @file main.inc.php
 * Каркас для основного контента + левый сайдбар
 * Видимость: на всех страницах
 */
 $block_info = true;
?>
<section id="content">
	<div class="container">
		<div class="row">
			<aside class="col-sm-12 col-md-12 col-lg-3">
				<div class="row">
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-12">
					<?php include "includes/forms/form-order.inc.php";?>
					<div class="block">
						<ul class="list-inline social">
							<li><a href="index.php?id=example"><i class="icon-facebook"> </i></a></li>
							<li><a href="index.php?id=example"><i class="icon-instagram"> </i></a></li>
							<li><a href="index.php?id=example"><i class="icon-ok"> </i></a></li>
							<li><a href="index.php?id=example"><i class="icon-vk"> </i></a></li>
							<li><a href="index.php?id=example"><i class="icon-twitter"> </i></a></li>
						</ul>
					</div>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-12">
					<?php 
					switch($id){
					case "service":
						break;
					case "promo-page":
						break;
					default:
						include "includes/blocks/block-info.inc.php";break;
					}
					?>
					</div>
				</div><!-- /end inner row-->
			</aside>
			<div class="col-sm-12 col-md-12 col-lg-9">
			<?php
				switch($id){
					case "service":
						include "includes/service/".$id.".php";break;
					case "promo-page":
						include "includes/pages/".$id.".inc.php";break;	
					case "partner":
						include "includes/pages/".$id.".inc.php";break;	
					case "about":
						include "includes/pages/".$id.".inc.php";break;	
					case "contact":
						include "includes/pages/".$id.".inc.php";break;
					case "sitemap":
						include "includes/pages/".$id.".inc.php";break;
						
					case "in_moscow":
						include "includes/pages/in_moscow.inc.php";break;
					case "district":
						include "includes/pages/district.inc.php";break;
					case "out_moscow":
						include "includes/pages/out_moscow.inc.php";break;
					case "example":
						include "includes/pages/example.inc.php";break;
						
					case "home":
					default:
						include "includes/pages/front.inc.php";break;
						
				}
			?>
			</div>
		</div>
	</div>
</section>