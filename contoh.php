<!doctype html>
<html>

<head>
    <!-- Title -->
    <title>Home</title>
</head>

<body>
	
	<?php
		
		$test = "35 seconds"; 
		echo "<h1>$test</h1>";
		
		
		// Variabel
		$testString = "Selamat pagi"; 
		
		$testDouble = 79.2; 

		$testInteger = 12; 

		$aBolean = true;
		
		$array1 = array("merah", "kuning" , "hijau");

		// if else
		echo "<h3>Contoh IF ELSE</h3>";
		$t = 100;

		if ($t < 20) {
		    echo "t lebih kecil dari 20 <br>";
		} 
		else if ($t > 20 and $t < 150) {
		    echo "t diantara 20 dan 150 <br>";
		}
		else {
			echo "t lebih besar dari 150 <br>";
		}


		// for loop
		echo "<h3>Contoh For</h3>";
		
		for ($x = 0; $x <= 10; $x++) {
		    echo "Angka yang muncul: $x <br>";
		}

		
		echo "<h3>Contoh Foreach</h3>";
		$array2 = array("nol", "satu" , "dua" , "tiga" , "empat");

		foreach ($array2 as $value) {
		    echo "$value <br>";
		}
		
		echo "<h3>Contoh Foreach lagi</h3>";
		// ARRAY
		$first[0] = "zero";
		$first[1] = "one"; 
		$first[2] = "two"; 

		foreach ($first as $value) {
		    echo "$value <br>";
		}

	?>

   
</body>

</html>
