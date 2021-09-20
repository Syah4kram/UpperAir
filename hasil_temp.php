<!DOCTYPE html>
<html>
<head>
    <title>HASIL</title>
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/paper-dashboard.css">
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/paper-dashboard-min.css">
</head>

<body>

<div class="wrapper">
	<div class="sidebar" data-color="white" data-active-color="warning">
		<div class="logo">
			<div class="simple-text logo-normal">
				Menu
			</div>
		</div>

		<div class="sidebar-wrapper ps-container ps-theme-default ps-active-x" data-ps-id="37ee20ba-e378-3a79-bc57-88347af65756">
			<ul class="nav">
				<li><a href="index.php"><i class="nc-icon nc-bank"></i><p>Halaman Utama</p></a></li>
				<li><a href="pilot.php"><i class="nc-icon nc-badge"></i><p>Sandi PILOT</p></a></li>
				<li><a href="temp.php"><i class="nc-icon nc-caps-small"></i><p>Sandi TEMP</p></a></li>
				<li><a href="input.php"><i class="nc-icon nc-air-baloon"></i><p>Input Nilai Indeks</p></a></li>
				<li><a href="" class="text-danger"><i class="nc-icon nc-umbrella-13 text-danger"></i><p>Hasil</p></a></li>
				<li><a href="nilai-index.php"><i class="nc-icon nc-compass-05"></i><p>Nilai Indeks Stabilitas</p></a></li>
				<li><a href="about.php"><i class="nc-icon nc-alert-circle-i"></i><p>Sandi PILOT & TEMP</p></a></li>
			</ul>
		</div>

	</div>

	<div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="31851cbd-f582-4f55-5d2a-3b7085fbad6c">
		<div class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="">Hasil</a>
				</div>
			</div>
		</div>

	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Hasil Decode Sandi</h3>
						</div>

					<div class="card-body col-md-11" style="padding-left: 12pt">
						<?php include 'process_temp.php'?>
					</div>

					</div>
				</div>
			</div>
		</div>	

	</div>

	</div>
</div>

</body>
</html>