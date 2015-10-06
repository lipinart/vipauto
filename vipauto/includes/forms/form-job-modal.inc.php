<?php
/*
 *	@file form.inc.php
 */
?>
<!-- Modal -->
<div class="modal fade" id="form-job-modal" tabindex="-1" role="dialog" aria-labelledby="modal-form">
	<div class="modal-dialog" role="document">
		<form>
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-form">Отправить резюме</h4>
			</div>
			<div class="modal-body">
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
						<textarea class="form-control" rows="3" placeholder="Примечание:"></textarea>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Отправить резюме</button>
			</div>      
		</div>
		</form>
	</div>
</div>