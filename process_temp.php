<?php
$a="PPAA";
$lima="5";

$pppsurf=$_REQUEST['input_field_surf'];
$tttdd0=$_REQUEST['input_field_tttdd0'];
$df0=$_REQUEST['input_field_ddfff0'];
$yyggi=$_REQUEST['YYGGI'];

$temp=$_REQUEST['input_field_temp'];
$td=$_REQUEST['input_field_td'];
$df=$_REQUEST['input_field_df'];

$satu = "1";
$dua = "2";
$tiga = "3";
$delapanlima = "85";
$seratus = "0";
$bag = 1;
$k=0;

$no_max_wind = "77999";

//Bagian A
//SEKSI 1
echo "<b>DATA PENGUKURAN STASIUN DARAT</b>";

//SEKSI 2
		$sec2 = str_split($yyggi);
		$li = $yyggi[4];

		$days = ($yyggi/1000)-50;
		$days = floor($days);
		echo "<br>Tanggal Pengukuran: ".$days."<br>";
		echo "Jam Pengukuran: ".$yyggi[2].$yyggi[3]." GMT<br>";

		$last_iso = ($li)*100;
		echo "Permukaan Standar Isobarik Terakhir: ".$last_iso." mb<br>";

		echo "Nomor Stasiun: ".$_REQUEST['IIiii']."<br>";

		$code_ppp0 = str_split($pppsurf[0]);
		$p0p0p0 = $code_ppp0[2].$code_ppp0[3].$code_ppp0[4];

		if ($p0p0p0 < 100) {
			$p_on_surf = $p0p0p0+1000;
		} else {
			$p_on_surf = $p0p0p0;
		}
		echo "<br><b>Data pada tekanan lapisan permukaan ".$p_on_surf." mb</b><br>";

		$code_td0 = str_split($tttdd0[0]);
		if ($code_td0[2]%2==0) {
			$t="";
		} else {
			$t="-";
		}
		echo "Suhu: ".$t.$code_td0[0].$code_td0[1]." C<br>";

		$d=$code_td0[3].$code_td0[4];
		if ($d<51) {
			$d=$d/10;
		} else {
			$d=$d-50;
		}
		echo "Depresi titik embun: ".$d." C<br>";

		$code = str_split($df0[0]);

		if ($code[2] == 5 ) {
			$dir = ($df0[0])/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] == 0) {
			$dir = ($df0[0])/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] < 5) {
			$seratus = $code[2];
			$dir = (($df0[0])/100)-1;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} else {
			$seratus = ($code[2]-5)*100;
			$dir = (($df0[0])/100)-($code[2]-5);
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		}
		
		$spd = ($seratus+$code[3]*10)+$code[4];
		$spd = floor($spd);
		echo "Kecepatan Angin: ".$spd." knot";
		echo "<br>";

$j = count($temp);
for ($i=0; $i < $j; $i++) {
	
	$sec = str_split($temp[$i]);
	$section = $sec[0].$sec[1];
	
	if (strpos($temp[$i], "TTCC") !== false) {
		$bag = 2;
		goto tb;
	} elseif (strpos($temp[$i], "TTBB") !== false) {
		$bag = 2;
		goto tb;
	} elseif (strpos($temp[$i], "31313") !== false) {
		echo "<br><b>Data pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";
		goto tddf;
	} elseif (strpos($section, "88") !== false) {
		echo "<br><b>Data Tropopause pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";
		goto tddf;
	} elseif (strpos($temp[$i], "88999") !== false){
		echo "Tidak ada data lapisan tropopause";
	} elseif (strpos($section, "77") !== false) {
		echo "<br><b>Angin maksimum pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";
		$code = str_split($td[$i]);
		$arah = $td[0];
		goto df;
	} else {goto temp;}
	
	temp:
	$h = str_split($temp[$i]);
	$gph=0;

	if ($h[0]==0) {
		$hf = 1000;
	} elseif ($h[0]==92) {
		$hf = 925;
	} else {
		$hf = $h[0].$h[1]."0";
	}

	if ($hf>500) {
		$gph = $h[2].$h[3].$h[4];
		$gph = floor($gph);
	} else {
		$gph = $h[2].$h[3].$h[4]."0";
		if ($hf<300) {
			$gph = "1".$gph;
		}
	}
	echo "<br><b>Data pada lapisan standar ".$hf." mb dengan ketinggian ".$gph." m</b><br>";

	tddf:
	$code_td = str_split($td[$i]);
		if ($code_td[2]%2==0) {
			$t="";
		} else {
			$t="-";
		}
		echo "Suhu: ".$t.$code_td[0].$code_td[1]." C<br>";

		$d=$code_td[3].$code_td[4];
		if ($d<51) {
			$d=$d/10;
		} else {
			$d=$d-50;
		}
		echo "Depresi titik embun: ".$d." C<br>";
		
		$code = str_split($df[$i]);
		$arah = $df[$i];
		df:

		if ($code[2] == 5 ) {
			$dir = ($arah)/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] == 0) {
			$dir = ($arah)/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] < 5) {
			$seratus = $code[2];
			$dir = (($arah)/100)-1;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} else {
			$seratus = ($code[2]-5)*100;
			$dir = (($arah)/100)-($code[2]-5);
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		}
		
		$spd = ($seratus+$code[3]*10)+$code[4];
		$spd = floor($spd);
		echo "Kecepatan Angin: ".$spd." knot";
		echo "<br>";
		
		$k++;
		$code4vv = str_split($df[$i]);
		if (strpos($code4vv[0], "4") !== false) {
			$vb = $code4vv[1].$code4vv[2];
			$vbelow = $vb - ($spd/10);
			$va = $code4vv[3].$code4vv[4];
			$vabove = $va - ($spd/10);
			echo "Perbedaan kecepatan angin di bawah lapisan angin maksimum: ".$vbelow."<br>";
			echo "Perbedaan kecepatan angin di atas lapisan angin maksimum: ".$vabove."<br>";
		} else { continue; } 
		last:
		continue;
}

tb:
$j-=1;
for ($i=$k; $i < $j ; $i++) {
	$l=$i+1;

	if (strpos($temp[$i], "TTCC") !== false) {
		goto tc;
	}

	$sec4 = $temp[$l];
	if (strpos($sec4, "41414") !== false) {
		$sep = str_split($td[$l]);
		echo "<br><b>Karakteristik Awan</b><br>";
		if ($sep[0]<9) {
			echo "Jumlah awan: ".$sep[0]."/8 <br>";
		} elseif ($sep[0]==9) {
			echo "Langit terhalang oleh kabut atau fenomena meteorologi lainnya";
		} else {goto end;}
		goto end;
	} else {goto l;}

	l:
	$sec = str_split($temp[$l]);
	echo "<br><b>Data pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";

	$code_td = str_split($td[$l]);
		if ($code_td[2]%2==0) {
			$t="";
		} else {
			$t="-";
		}
		echo "Suhu: ".$t.$code_td[0].$code_td[1]." C<br>";

		$d=$code_td[3].$code_td[4];
		if ($d<51) {
			$d=$d/10;
		} else {
			$d=$d-50;
		}
		echo "Depresi titik embun: ".$d." C<br>";
		end:
		$k++;
}

tc:
for ($i=$k; $i < $j ; $i++) {
	$l=$i+1;

	$sec = str_split($temp[$l]);
	$section = $sec[0].$sec[1];
	
	if (strpos($temp[$i], "31313") !== false) {
		echo "<br><b>Data pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";
		goto tddf2;
	} elseif (strpos($section, "88") !== false) {
		echo "<br><b>Data Tropopause pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";
		goto tddf2;
	} elseif (strpos($temp[$i], "88999") !== false){
		echo "Tidak ada data lapisan tropopause";
	} elseif (strpos($section, "77") !== false) {
		echo "<br><b>Angin maksimum pada tekanan ".$sec[2].$sec[3].$sec[4]." mb</b><br>";
		$code = str_split($td[$i]);
		$arah = $td[0];
		goto df2;
	} else {goto temp2;}
	
	temp2:
	$h = str_split($temp[$l]);
	$gph=0;

	$hf = $h[0].$h[1];
	
	if ($hf>500) {
		$gph = $h[2].$h[3].$h[4];
		$gph = floor($gph);
	} else {
		$gph = $h[2].$h[3].$h[4]."0";
		if ($hf<300) {
			$gph = "1".$gph;
		}
	}
	echo "<br><b>Data pada lapisan standar ".$hf." mb dengan ketinggian ".$gph." m</b><br>";

	tddf2:
	$code_td = str_split($td[$l]);
		if ($code_td[2]%2==0) {
			$t="";
		} else {
			$t="-";
		}
		echo "Suhu: ".$t.$code_td[0].$code_td[1]." C<br>";

		$d=$code_td[3].$code_td[4];
		if ($d<51) {
			$d=$d/10;
		} else {
			$d=$d-50;
		}
		echo "Depresi titik embun: ".$d." C<br>";
		
		$code = str_split($df[$l]);
		$arah = $df[$l];
		df2:

		if ($code[2] == 5 ) {
			$dir = ($arah)/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] == 0) {
			$dir = ($arah)/100;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} elseif ($code[2] < 5) {
			$seratus = $code[2];
			$dir = (($arah)/100)-1;
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		} else {
			$seratus = ($code[2]-5)*100;
			$dir = (($arah)/100)-($code[2]-5);
			$dir = floor($dir);
			echo "Arah angin: ".$dir." derajat <br>";
		}
		
		$spd = ($seratus+$code[3]*10)+$code[4];
		$spd = floor($spd);
		echo "Kecepatan Angin: ".$spd." knot";
		echo "<br>";

		$code4vv = str_split($df[$i]);
		if (strpos($code4vv[0], "4") !== false) {
			$vb = $code4vv[1].$code4vv[2];
			$vbelow = $vb - ($spd/10);
			$va = $code4vv[3].$code4vv[4];
			$vabove = $va - ($spd/10);
			echo "Perbedaan kecepatan angin di bawah lapisan angin maksimum: ".$vbelow."<br>";
			echo "Perbedaan kecepatan angin di atas lapisan angin maksimum: ".$vabove."<br>";
		} else { } 
		last2:
	$k++;
}
?>