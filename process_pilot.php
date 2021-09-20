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
$k = 0;

$no_max_wind = "77999";

//Bagian A
//SEKSI 1
echo "<b>DATA PENGUKURAN STASIUN DARAT</b>";

//SEKSI 2
		$sec2 = str_split($yygga);
		$alat = $yygga[5];

		$days = ($yygga/1000)-50;
		$days = floor($days);
		echo "<br>Tanggal Pengukuran: ".$days."<br>";
		echo "Jam Pengukuran: ".$yygga[3].$yygga[4]." GMT<br>";

		if (strpos($alat, "1") !== false) {
			echo "Alat Pengukur: Theodolite Optik<br>";
		} elseif (strpos($alat, "2") !== false) {
			echo "Alat Pengukur: Radiotheodolite<br>";
		} elseif (strpos($alat, "3") !== false) {
			echo "Alat Pengukur: Radar<br>";
		} elseif (strpos($alat, "4") !== false) {
			echo "Alat Pengukur: Alat pengukur tekanan bercampur dengan alat pengukur angin tetapi pengukur tekanan gagal pada saat pengmatan<br>";
		} elseif (strpos($alat, "5") !== false) {
			echo "Alat Pengukur: VLF-Omega<br>";
		} elseif (strpos($alat, "6") !== false) {
			echo "Alat Pengukur: Loran-C<br>";
		} elseif (strpos($alat, "7") !== false) {
			echo "Alat Pengukur: Wind Profiler<br>";
		} elseif (strpos($alat, "8") !== false) {
			echo "Alat Pengukur: Navigasi Satelit<br>";
		} else { echo "Diam"; }

//SEKSI 3
		echo "Nomor Stasiun: ".$_REQUEST['IIiii']."<br>";

$j = count($b);
for ($i=0; $i < $j; $i++) {
	$c = str_split($b[$i]);
	$sec = $c[0].$c[1];

	if (strpos($b[$i], "21212") !== false) {
		goto a;
		$i++;
		$k++;
	} elseif (strpos($sec, "66") !== false || strpos($sec, "77") !== false) {
		echo "<br><b>Data angin maksimum pada ketinggian ".$c[2].$c[3].$c[4]." mb</b><br>";
		$i++;
		$k++;
	} elseif (strpos($sec, "6") !== false || strpos($sec, "7") !== false) {
		echo "<br><b>Data angin maksimum pada ketinggian".($c[1].$c[2].$c[3].$c[4])*32.8084." feet</b><br>";
		$i++;
		$k++;
	} elseif (strpos($sec, "44") !== false) {
		$ib = ($c[3].$c[4]."0");
		echo "<br><b>Data pengukuran pada ketinggian isobarik ".$ib." mb</b><br>";
		$i++;
		$k++;
	} elseif (strpos($c[0], "9") !== false) {
		$bag_b = str_split($b[$i]);
		$h_b = ($bag_b[1].$bag_b[2].$bag_b[3].$bag_b[4])*10;
		echo "<br><b>Data pengukuran pada ketinggian ".$h_b." feet</b><br>";
		$i++;
		$k++;
	} else{}

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

		if (strpos($c[0], "4") !== false) {
			$vb = $c[1].$c[2];
			$vbelow = $vb - ($spd/10);
			$va = $c[3].$c[4];
			$vabove = $va - ($spd/10);
			echo "Perbedaan kecepatan angin di bawah lapisan angin maksimum: ".$vbelow."<br>";
			echo "Perbedaan kecepatan angin di atas lapisan angin maksimum: ".$vabove."<br>";
		} else {}
		$k++;
}
a:
for ($i=$k; $i < $j ; $i++) { 
	echo "<br><b>Data angin maksimum pada ketinggian ".$c[2].$c[3].$c[4]." mb</b><br>";
	$i++;
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
?>