<?php 
	$sweat;
	if ($sweat <=135) {
	echo '
	<div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-world-2"></span>
		<span data-notify="message"><b>SWEAT-Index: </b>Keadaan cuaca<b> Sedikit Buruk</b></span>
	</div>';
	}

	if ($sweat > 240 ) {
	echo '
	<div class="alert alert-danger alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-world-2"></span>
		<span data-notify="message"> <b>SWEAT-Index: </b> Keadaan cuaca<b> Sangat Buruk</b></span>
	</div>';
	}

	if ($sweat <= 240 && $sweat > 135 ) {
	echo '
	<div class="alert alert-warning alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-world-2"></span>
		<span data-notify="message"> <b>SWEAT-Index: </b>Keadaan cuaca<b> Kemungkinan Buruk</b></span>
	</div>';
	}
?>