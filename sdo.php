<!DOCTYPE html>
<html>
<?php include ('head.php') ?>
<body>
	<?php include ('navbar.php'); ?>
<h2>SDO</h2>
<form class="container" id="needs-validation" novalidate>
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="validationCustom01">Nome</label>
			<input type="text" class="form-control" id="validationCustom01" placeholder=" Inserire Nome" minlength="2" required>
			<div class="invalid-feedback">
				Inserire il nome.
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<label for="validationCustom02">Cognome</label>
			<input type="text" class="form-control" id="validationCustom02" placeholder=" Inserire Cognome" minlength="2" required> <div class="invalid-feedback">
				Inserire il cognome.
			</div>
		</div>  
	</div>
		<div class="row">
		<div class="col-md-6 mb-3">
			<label for="validationCustom03">Data di Nascita</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Data di Nascita" required>
			<div class="invalid-feedback">
				Inserire la data di nascita.
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<label for="validationCustom01">ID Paziente</label>
			<input type="text" class="form-control" id="validationCustom01" placeholder=" Inserire ID Paziente" minlength="2" required>
			<div class="invalid-feedback">
				ID Paziente.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="validationCustom03">Data Dimissione</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Inserire la data di dimissione" required>
			<div class="invalid-feedback">
				Data Dimissione.
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<label for="validationCustom05">Codice di Dimissione</label>
			<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Selezionare il Codice di dimissione</option>
					<option>Dimesso a domicilio</option>
					<option>Trasferito ad altro ospedale</option>
					<option>Dimesso contro il parere dei sanitari</option>
					<option>Decesso</option>
				</select>
			</div>
			<div class="invalid-feedback">
				Inserire un codice di dimissione valido.
			</div>
		</div>
		<div>	
		<button class="btn btn-primary" type="Conferma">Conferma</button>
		</form>
<?php include ('script.php') ?>
</body>
</html>