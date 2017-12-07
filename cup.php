<!DOCTYPE html>
<html>
<?php include ('head.php') ?>
<body>
	<?php include ('navbar.php'); ?>
<h2>CUP</h2>
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
			<label for="validationCustom01">Codice Fiscale</label>
			<input type="text" class="form-control" id="validationCustom01" placeholder=" Inserire Codice Fiscale" minlength="2" required>
			<div class="invalid-feedback">
				Codice Fiscale.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 mb-3">
			<label for="validationCustom03">Data dell'esame</label>
			<input type="text" class="form-control" id="validationCustom03" placeholder="Inserire la data dell'esame" required>
			<div class="invalid-feedback">
				Data Esame.
			</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="validationCustom05">Esame da prenotare</label>
			<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Selezionare Esame</option>
					<option>ECG</option>
					<option>EEG</option>
					<option>Ecografia</option>
					<option>Radiografia</option>
					<option>Tomografia Computerizzata</option>
					<option>Risonanza Magnetica</option>
				</select>
			</div>
			<div class="invalid-feedback">
				Inserire un esame valido.
			</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="validationCustom05">Distretto Corporeo</label>
			<div class="form-group">
				<select class="form-control" id="exampleFormControlSelect2">
					<option>Selezionare Distretto Corporeo</option>
					<option>Encefalo</option>
					<option>TSA</option>
					<option>Cuore</option>
					<option>Torace</option>
					<option>Addome Completo</option>
					<option>Addome Superiode</option>
					<option>Addome Inferiore</option>
					<option>Arto Superiore</option>
					<option>Polso e Mano</option>
					<option>Bacino</option>
					<option>Arto Inferiore</option>
					<option>Tibio-tarsica e Piede</option>
				</select>
			</div>
			<div class="invalid-feedback">
				Inserire un esame valido.
			</div>
		</div>
		<div>	
		<button class="btn btn-primary" type="Conferma">Conferma</button>
		</form>
	<?php include ('script.php') ?>
</body>
</html>