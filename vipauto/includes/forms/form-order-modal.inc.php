<?php
/*
 *	@file form.inc.php
 */
?>
<!-- Modal -->
<div class="modal fade" id="form-order-modal" tabindex="-1" role="dialog" aria-labelledby="modal-form">
	<div class="modal-dialog" role="document">
		<form>
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-form">Онлайн заказ эвакуатора</h4>
			</div>
			<div class="modal-body row">
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
				<label for="disabledTextInput">Куда подать эвакуатор:</label>
				<input type="text" class="form-control" placeholder="Откуда: ЦАО, Арбат">
			</div>
			<div class="form-group">
				<label for="disabledTextInput">Куда транспортировать:</label>
				<input type="text" class="form-control" placeholder="Куда: ЗАО, Внуково">
			</div>
			<div class="form-group">
				<a role="button" class="collapse-toggle form-control" data-toggle="#radiolist-modal" href="#radiolist-modal"><i class="icon-arrow-down pull-right"></i> Тип услуги </a>
				<div class="collapse radio" id="radiolist-modal">
					
					<ul class="list-unstyled">
						<li><label><input type="radio" name="options" value="moto"> Эвакуация мототехники</label></li>
						<li><label><input type="radio" name="options" value="car"> Эвакуация легкового авто</label></li>
						<li><label><input type="radio" name="options" value="truck"> Эвакуация грузового авто</label></li>
						<li><label><input type="radio" name="options" value="cpec"> Эвакуация спецтранспорта</label></li>
						<li><label><input type="radio" name="options" value="help"> Эвакуация спецтранспорта</label></li>
					</ul>
				</div>
			</div>
			<div class="form-group">
				<a role="button" class="collapse-toggle form-control" data-toggle="#checklist-modal" href="#checklist-modal"><i class="icon-arrow-down pull-right"></i> Дополнительно: </a>
				<div class="collapse checkbox" id="checklist-modal">
					
					<ul class="list-unstyled">
						<li><label><input type="checkbox" value=""> Нужен кран-манипулятор</label></li>
						<li><label><input type="checkbox" value=""> Заблокировано рулевое</label></li>
						<li><label><input type="checkbox" value=""> Заблокированы колеса</label></li>
						<li><label><input type="checkbox" value=""> Авто заблокировано другими ТС</label></li>
					</ul>
				</div>
			</div>
				</div>
				
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<label for="disabledTextInput">Ваше имя:</label>
						<input type="text" class="form-control" placeholder="Петров Иван">
					</div>
					<div class="form-group">
						<label for="disabledTextInput">Ваше телефон:</label>
						<input type="text" class="form-control" placeholder="+7 888 888 88 88">
					</div>
					<div class="form-group">
						<label for="disabledTextInput">Примечание:</label>
						<textarea class="form-control" rows="3" placeholder="Например: заблокировано только 1 колеса,  нет подъезда и пр."></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Заказать эвакуатор</button>
			</div>      
		</div>
		</form>
	</div>
</div>