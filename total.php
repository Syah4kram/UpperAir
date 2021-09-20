<?php 
	if ($tt >=46) {
	echo '
	<div class="alert alert-danger alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-umbrella-13"></span>
		<span data-notify="message"> <b>Total-Totals Index: </b> Kemungkinan badai<b> 75%</b></span>
	</div>';
	}

	if ($tt < 39) {
	echo '
	<div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-umbrella-13"></span>
		<span data-notify="message"> <b>Total-Totals Index: </b>Kemungkinan badai<b> Tidak ada badai 89%</b></span>
	</div>';
	}


	if($tt >=39 && $tt <46 ){
	echo '
	<div class="alert alert-warning alert-with-icon alert-dismissible fade show" data-notify="container">
		<span data-notify="icon" class="nc-icon nc-umbrella-13"></span>
		<span data-notify="message"> <b>Total-Totals Index: </b>Kemungkinan badai<b> 42%</b></span>
	</div>';
	}

?>