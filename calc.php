<?php
	$t850 = $_GET["T850"];
	$t700 = $_GET["T700"];
	$t500 = $_GET["T500"];

	$td850 = $_GET["Td850"];
	$td700 = $_GET["Td700"];

	$f850 = $_GET["Td850"];
	$f500 = $_GET["F500"];

	$s = $_GET["S"];

	$ki = ($t850-$t500) + $td850-($t700-$td700);
	$tt = ($t850-$t500) + ($td850-$t500);
	$sweat = 12*($td850) + 20*($tt-49) + 2*($f850) + $f500 + 125*($s + 0.2);

	//($t850, $t700, $t500, $td850, $td700, $f850, $f500, $s, $ki, $tt, $sweat);
?>