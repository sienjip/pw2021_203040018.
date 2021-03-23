<?php
/*
Nazhif Hafidz Fauzan
203040018
https://github.com/sienjip/pw2021_203040018
Pertemuan 3 - 18 Februarari 2021
Mempelajari mengenai Struktur Kendali PHP
*/
?>
<?php 
// pengulangan
// while
// do
// for
// do .. while
// foreach : pengulangan khusus array
//for( $i = 0; $i < 5; $i++){ //for variable i = 0 , variable i kurang dari 5, variabli i++ (ditambah 1)
	//echo "Hello World <br>";
//}
//$i = 0;
//while($i < 5) {
	//echo "Hello World <br>";
//$i++;

//$i = 0;
//do {
	//echo "Hello World <br>";
//$i++;
//} while ( $i < 10);
?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">
		<?php 
			for ($i = 1; $i <= 3; $i++) {
				echo "<tr>";
				for ($j = 1; $j <= 5; $j++){
					echo "<td>$i,$j </td>";
				}
				echo "<tr>";
			}
		 ?>
	</table>

</body>
</html>