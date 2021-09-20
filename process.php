<?php
$a="PPAA";
$lima="5";
$b=$_REQUEST['input_field'];
$yygga=$_REQUEST['YYGGa'];

$satu = "1";
$dua = "2";
$tiga = "3";
$delapanlima = "85";
$seratus = "0";

$no_max_wind = "77999";

//Bagian A
//SEKSI 1
echo "<b>DATA PENGUKURAN STASIUN DARAT</b>";

//SEKSI 2
		$sec2 = str_split($yygga);
		$alat = $yygga[5];

		$satelit = "8";
		$theodolite = "1";
		$days = ($yygga/1000)-50;
		$days = floor($days);
		echo "<br>Tanggal Pengukuran: ".$days."<br>";
		echo "Jam Pengukuran: ".$yygga[3].$yygga[4]." GMT<br>";

		if (strpos($alat, $theodolite) !== false) {
			echo "Alat Pengukur: Theodolite Optik<br>";
		} elseif (strpos($alat, $satelit) !== false) {
			echo "Alat Pengukur: Navigasi Satelit<br>";
		} else { }

//SEKSI 3
		echo "Nomor Stasiun: ".$_REQUEST['IIiii']."<br>";

$j = count($b);
for ($i=0; $i < $j; $i++) {
	if ($b[$i] > 44000) {
		if (strpos($b[$i], $no_max_wind) !== false) {
		echo "<br><b>Tidak Ada Angin Maksimum</b><br>";
		} elseif ($b[$i] < 90000) {
		$code = str_split($b[$i]);
		if (strpos($b[$i], "85") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 850 mb</b><br>";
		} elseif (strpos($b[$i], "70") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 700 mb </b><br>";
		} elseif (strpos($b[$i], "50") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 500 mb </b><br>";
		} elseif (strpos($b[$i], "40") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 400 mb </b><br>";
		} elseif (strpos($b[$i], "30") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 300 mb </b><br>";
		} elseif (strpos($b[$i], "25") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 250 mb </b><br>";
		} elseif (strpos($b[$i], "20") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 200 mb </b><br>";
		} elseif (strpos($b[$i], "15") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 150 mb </b><br>";
		} elseif (strpos($b[$i], "10") !== false) {
			echo "<br><b>Data pengukuran pada ketinggian isobarik 100 mb </b><br>";
		}
			
		} else {
			$bag_b = str_split($b[$i]);

			$h_b = ($bag_b[1].$bag_b[2].$bag_b[3].$bag_b[4])*10;
			echo "<br><b>Data pengukuran pada ketinggian ".$h_b." feet</b><br>";
		}
	} else {
		$code = array();
		$code = str_split($b[$i]);

		if ($code[2] == 5 ) {
			$dir = ($b[$i])/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] == 0) {
			$dir = ($b[$i])/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] < 5) {
			$seratus = $code[2];
			$dir = (($b[$i])/100)-1;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} else {
			$seratus = ($code[2]-5)*100;
			$dir = (($b[$i])/100)-($code[2]-5);
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		}
		
		$spd = ($seratus+$code[3]*10)+$code[4];
		$spd = floor($spd);
		echo "Kecepatan Angin: ".$spd." knot";
		echo "<br>";
	}
}
?>