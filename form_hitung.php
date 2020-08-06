<form method="GET" action="hasil_hitung.php">
	Nilai a : <input type="text" name="a"><br><br>
	Nilai b : <input type="text" name="b"><br><br>
	operasi : <br>
<input type="radio" name="operasi"
value="jumlah">penjumlahan<br>
<input type="radio" name="operasi" value="kurang">pengurangan
<input type="radio" name="operasi" value="kali">perkalian<br>
<input type="radio" name="operasi" value="bagi">pembagian<br>
<input type="submit" value="hitung"></form>

Skrip hasil_hitung.php

<?php

$a = $_GET ['a'];
$b = $_GET ['b'];
$operasi = $_GET ['operasi'];

echo "Nilai a : $a<br>";
echo "Nilai b : $b<br><br>";

if ($operasi=="jumlah") {
	$c = $a + $b; //rumus penjumlahan
	echo "penjumlahan $a + $b = $c";
}
 elseif ($operasi=="kurang") {
 $c = $a - $b; //rumus pengurangan
	echo "pengurangan $a - $b = $c";

 }
 elseif ($operasi=="kali") {
 $c = $a * $b; //rumus perkalian
	echo "perkalian $a * $b = $c";

}
elseif ($operasi=="bagi") {
 $c = $a / $b; //rumus perkalian
	echo "pembagian $a / $b = $c";

}

//apabila operasi perhitungan belum dipilih
else
	echo "Anda belum memilih operasi perhitungan";


?>

