<!DOCTYPE html>
<html>
<?php include ('head.php') ?>
<body>
	<?php include ('navbar.php'); ?>
<h2>RIS</h2>
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
		<div class="col-md-4 mb-3">
			<label for="validationCustom03">Data di Nascita</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Data di Nascita" required>
			<div class="invalid-feedback">
				Inserire la data di nascita.
			</div>
		</div>
<div class="col-md-4 mb-3">
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
		<div class="col-md-4 mb-3">
			<label for="validationCustom03">Codice Fiscale</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Inserire Codice Fiscale" required>
			<div class="invalid-feedback">
				Codice Fiscale.
			</div>
		</div>
	</div>
	<div class="row">
		
		<div class="col-md-6 mb-3">
			<label for="validationCustom03">ID Paziente</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Inserire ID Paziente" required>
			<div class="invalid-feedback">
				ID Paziente.
			</div>
		</div>
		<div>
	<div class="row">
		<div class="col-md-6 mb-3">
			<label for="validationCustom03">Data esame</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Inserire la data dell'esame" required>
			<div class="invalid-feedback">
				Data Esame.
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<label for="validationCustom05">Nome Esame</label>
			<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Selezionare Esame</option>
					<option>RX Torace</option>
					<option>RX Addome/DRV</option>
					<option>Rx Arto Superiore</option>
					<option>RX Bacino</option>
					<option>RX Arto Inferiore</option>
					<option>HRTC</option>
					<option>TC Addome Completo</option>
					<option>TC TSA</option>
					<option>TC Cardiaca</option>
					<option>RM Encefalo</option>
					<option>RM Addome</option>
					<option>Rm Cuore</option>
				</select>
			</div>
			<div class="invalid-feedback">
				Inserire un codice di dimissione valido.
			</div>
		</div>
		<div>	
		<button class="btn btn-primary" type="Conferma">Carica le immagini</button>
		</form>
<?php include ('script.php') ?>
</body>
</html>