<!DOCTYPE html>
<html>
<head>
    <title>Input Data Sounding</title>
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
				<li><a href="input.php" class="text-danger"><i class="nc-icon nc-air-baloon text-danger"></i><p>Input Nilai Indeks</p></a></li>
				<li><a href=""><i class="nc-icon nc-umbrella-13"></i><p>Hasil</p></a></li>
				<li><a href="nilai-index.php"><i class="nc-icon nc-compass-05"></i><p>Nilai Indeks Stabilitas</p></a></li>
				<li><a href="about.php"><i class="nc-icon nc-alert-circle-i"></i><p>Sandi PILOT & TEMP</p></a></li>
			</ul>
		</div>

	</div>

	<div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="31851cbd-f582-4f55-5d2a-3b7085fbad6c">
		<div class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="">Input Nilai</a>
				</div>
			</div>
		</div>

	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Input Data Sounding</h3>
							<p>Silahkan input data hanya dalam angka.</p>
						</div>

					<form action="hasil-sounding.php" method="get">
					<div class="card-body col-md-11" style="padding-left: 12pt">
					<div class="row">
						<div class="col-md-4 pr-1">
							<div class="form-group">
								<label>Suhu pada tekanan 850 hPa</label>
								
									<input type="text" name="T850" class="form-control">
								</form>
							</div>
						</div>
						<div class="col-md-4 px-1">
							<div class="form-group">
								<label>Suhu pada tekanan 700 hPa</label>
								<input type="text" name="T700" class="form-control">
							</div>
						</div>
						<div class="col-md-4 px-1">
							<div class="form-group">
								<label>Suhu pada tekanan 500 hPa</label>
								<input type="text" name="T500" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-1">
							<div class="form-group">
								<label>Titik embun pada tekanan 850 hPa</label>
								<input type="text" name="Td850" class="form-control">
							</div>
						</div>
						<div class="col-md-6 pl-1">
							<div class="form-group">
								<label>Titik embun pada tekanan 700 hPa</label>
								<input type="text" name="Td700" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 pr-1">
							<div class="form-group">
								<label>Kecepatan angin pada tekanan 850 hPa</label>
								<input type="text" name="F850" class="form-control">
							</div>
						</div>
						<div class="col-md-6 pl-1">
							<div class="form-group">
								<label>Kecepatan angin pada tekanan 500 hPa</label>
								<input type="text" name="F500" class="form-control">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Arah angin pada tekanan 850 hPa</label>
								<input type="text" name="S" class="form-control">
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-primary btn-round">Submit</button>
					</div>
					</div>
				</form>
				</div>
			</div>
		</div>	

	</div>

	</div>
</div>

</body>
</html>