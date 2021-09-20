<!DOCTYPE html>
<html>
<head>
    <title>Tentang Nilai Indeks</title>
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/paper-dashboard.css">
	<link rel="stylesheet" href="paper-dashboard-master/assets/css/paper-dashboard-min.css">
	<?php
		
	?>

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
				<li><a href=""><i class="nc-icon nc-umbrella-13"></i><p>Hasil</p></a></li>
				<li><a href="nilai-index.php" class="text-danger"><i class="nc-icon nc-compass-05 text-danger"></i><p>Nilai Indeks Stabilitas</p></a></li>
				<li><a href="about.php"><i class="nc-icon nc-alert-circle-i"></i><p>Sandi PILOT & TEMP</p></a></li>
			</ul>
			</ul>
		</div>

	</div>

	<div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="31851cbd-f582-4f55-5d2a-3b7085fbad6c">
		<div class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<a class="navbar-brand" href="">Tentang Nilai Indeks</a>
				</div>
			</div>
		</div>

	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Nilai Indeks Stabilitas</h3>
						</div>

					<div class="card-body col-md-11" style="padding-left: 12pt">
						<p>Nilai Indeks Stabilitas digunakan untuk mengevaluasi dan sebagai basis data prakiraan terjadinya potensi badai konvektif.</p>

						<h5>K-Index (KI)</h5>
						<p>KI adalah ukuran potensi badai akibat gerak konvektif, berdasarkan selang suhu vertikal, dan kelembaban atmosfer (AWS,1990). Indeks ini penting untuk memprediksi curah hujan dengan intensitas sangat lebat.</p>
						<h6 class="text-primary">K = (T850 – T500) + Td850 – (T700 –Td700)</h6><br>

						<p><b>Bila kita menganalisa data aerologi dapat diketahui bahwa: </b></p>
						<ul>
							<li>Temperatur pada lapisan 850 mb – Temperatur pada lapisan 500 mb artinya untuk mengetahui profil suhu vertikal. Bila semakin condong maka keadaannya akan semakin labil dan bila semakin tegak maka keadaannya akan semakin stabil.</li>
							<li>Dew Point padaa lapisan 850 mb artinya untuk mengetahui kandungan uap air dilapisan 850 mb. Bila kandungan uap airnya banyak maka akan mempercepat terjadinya kondensasi.</li>
							<li>Temperatur pada lapisan 700 mb – Dew Point 700 mb artinya untuk mengetahui jumlah kandungan uap air dilapisan tengah.</li>
						</ul>

						<p><b>Nilai KI:</b></p>
						<ul>
							<li><b>15 s/d 25: </b>Potensi Konveksi Kecil</li>
							<li><b>26 s/d 39: </b>Potensi Konveksi</li>
							<li><b>40 atau lebih: </b>Potensi Konveksi</li>
						</ul>

						<h5>SWEAT Index</h5>
						<p>Index SWEAT digunakan untuk memperkirakan potensi cuaca buruk, tetapi tetap memperhitungkan adanya mekanisme pemicu lain yang dapat mempengaruhi terjadinya cuaca buruk. Apabila terdapat nilai indeks SWEAT yang tinggi pada pagi hari, dimungkinkan adanya nilai indeks SWEAT yang tinggi pada sore atau malam hari sebelumnya. Nilai indeks SWEAT yang rendah menandakan tidak adanya cuaca yang buruk tetapi nilai indeks ini dapat meningkat secara drastis selama periode 12 jam (AWS, 1990). </p>

						<h6 class="text-primary">SWEAT = 12Td850 + 20(TT – 49) + 2f850 + f500 + 125 (s + 0.2)</h6><br>

						<ul>
							<li><b>150 s/d 300: </b>Cuaca Sedikit Buruk</li>
							<li><b>300 s/d 400: </b>Kemungkinan Cuaca Buruk</li>
							<li><b>400 atau lebih: </b> Cuaca Sangat Buruk</li>
						</ul>

						<h5>Total - Totals Index</h5>
						<p>Indeks Total Totals sebenarnya merupakan jumlah dari total vertikal (VT) (850 mb temp - 500 mb temperature) dan total cross (CT) (850 mb dewpoint – 500 mb temperature). Hal ini digunakan untuk mengukur potensi untuk pengembangan badai dan tingkat kehebatan badai.</p>

						<h6 class="text-primary">TT = (T850 – T500) + (Td850-T500)</h6><br>

						<ul>
							<li><b>TT > 46: </b>Kemungkinan Badai 75%</li>
							<li><b>41 s/d 45: </b>Kemungkinan Badai 42%</li>
							<li><b>TT < 39: </b>Tidak Ada Badai 89%</li>
						</ul>
						
						<br>
                        <p>Catatan: Terima kasih kepada Ulul Hasbi dan Bagus Primohadi Syahputra yang menjadi penyumbang besar dalam project ini.</p>
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