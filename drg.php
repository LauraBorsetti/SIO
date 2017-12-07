<!DOCTYPE html>
<html>
<?php include ('head.php') ?>
<body>
	<?php include ('navbar.php'); ?>
<h2>DRG</h2>
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
			<label for="validationCustom05">Sesso</label>
			<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Selezionare il Sesso</option>
					<option>Maschio</option>
					<option>Femmina</option>
				</select>
			</div>
			<div class="invalid-feedback">
				Inserire Sesso.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="validationCustom03">Data Ricovero</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Inserire la data del ricovero" required>
			<div class="invalid-feedback">
				Data Ricovero.
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<label for="validationCustom05">DRG</label>
			<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Selezionare DRG</option>
					<option>Patologie del Sistema Nervoso</option>
					<option>Patologie dell'apparato Cardio-Vascolare</option>
					<option>Patologie dell'apparato Respiratotio</option>
					<option>Patologie dell'apparato Gastro-Intestinale</option>
					<option>Patologie del sistema Endocrino</option>
					<option>Patologie dell'Apparato Locomotore</option>
					<option>Patologie Infettive</option>
					<option>Parto</option>
					<option>Traumi</option>
				</select>
			</div>
			<div class="invalid-feedback">
				Inserire un DRG valido.
			</div>
		</div>
		<div>	
		<button class="btn btn-primary" type="Conferma">Conferma</button>
		</form>
<?php include ('script.php') ?>
</body>
</html>