<?php 
	if ($ki <=15) {
	echo '
	<div class="alert alert-success alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-bell-55"></span>
		<span data-notify="message">Cuaca <b>Cerah</b></span>
	</div>';
	}

	if ($ki > 15 && $ki <=20) {
	echo '
	<div class="alert alert-primary alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-bell-55"></span>
		<span data-notify="message">Cuaca <b>Berawan</b></span>
	</div>';
	}

	if ($ki > 20 && $ki <=35) {
	echo '
	<div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-bell-55"></span>
		<span data-notify="message">Cuaca <b>Hujan Intensitas Rendah, Berawan</b></span>
	</div>';
	}

	if ($ki > 35 && $ki <=40) {
	echo '
	<div class="alert alert-danger alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-bell-55"></span>
		<span data-notify="message">Cuaca <b>Hujan Itensitas Sedang Hingga Berat </b></span>
	</div>';
	}

	if ($ki > 40) {
	echo '
	<div class="alert alert-danger alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-bell-55"></span>
		<span data-notify="message"> Cuaca <b>Hujan Lebat disertai Petir dan Angin Kencang</b></span>
	</div>';
	}

?>