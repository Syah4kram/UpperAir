<!DOCTYPE html>
<html>
<head>
    <title>Dekoder Sandi PILOT</title>
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/paper-dashboard.css">
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/paper-dashboard-min.css">

	<script src="jquery/Jquery.js"></script>
	<script src="jquery/popper.js"></script>

	<script src="add_fields.js"></script>

	<script>
$(document).ready(function(){
  $("#add_pb").click(function(){
  	 alert("The paragraph was clicked.");
});
});
</script>
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
				<li><a href="pilot.php" class="text-danger"><i class="nc-icon nc-badge text-danger"></i><p>Sandi PILOT</p></a></li>
				<li><a href="temp.php"><i class="nc-icon nc-caps-small"></i><p>Sandi TEMP</p></a></li>
				<li><a href="input.php"><i class="nc-icon nc-air-baloon"></i><p>Input Nilai Indeks</p></a></li>
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
					<a class="navbar-brand" href="">Input Sandi</a>
				</div>
			</div>
		</div>

	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Silahkan Input Sandi PILOT</h3>
							<p>Silahkan isi seksi satu sesuai urutan, dan tambah field untuk seksi dan bagian selanjutnya. Setiap field untuk satu sandi.Sebagai contoh 44nP1P1 untuk satu field, dan ddfff diketik di field selanjutnya, dan seterusnya. <br><br>Gunakan ikon tambah dan kurang untuk mengatur field yang tersedia.<br>
							Apabila sandi terdapat tanda (/), sandi tidak dapat diproses. Dekoder sandi ini masih dalam tahap pengerjaan.
							</p>
						</div>
						<div class="card-body col-md-11" style="padding-left: 1vw">
							<form action="hasil.php" method="post">
							<div class="field_wrapper form-group">
								<div class="row">
								<div class="col-md-4 pr-1">
									<h5><b>PPAA</b></h5>
								</div>
								<div class="col-md-4 pr-1">
									<input type="text" name="YYGGa" value="" class="form-control" placeholder="YYGGa4"/>
								</div>
								<div class="col-md-4 pr-1">
									<input type="text" name="IIiii" value="" class="form-control" placeholder="IIiii"/>
								</div>
								</div>
							
								<div class="row">
								<div class="col-md-4 pr-1">
									<input type="text" name="input_field[]" value="" class="form-control" placeholder="44nP1P1"/>
								</div>
								<div class="col-md-4 pr-1" style="padding-top: 0.5vw; padding-bottom: 27px">
									<a href="javascript:void(0);" class="add_input_button" title="Add field"><img src="add-icon.png"/></a>
								</div>
								</div>
							</div>
						<input type="submit" name="save" value="Submit" class="btn btn-primary btn-round"/>
						</form>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</div>
</div>

</body>
</html>