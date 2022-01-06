<?php
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$nilaiexplode = explode(" ",$nilai);
$valconvert = 0;
$valarray = array();
$valarray2 = array();
foreach ($nilaiexplode as $key => $value) {
	//echo $value.',';

	$valconvert += intval($value);
	//echo $valconvert.',';
	$valforarray = intval($value);
	$valarray[] = $valforarray;
	
	
}
foreach ($nilaiexplode as $key => $value) {
	//echo $value.',';

//	$valconvert += intval($value);
	//echo $valconvert.',';
	$valforarray = intval($value);
	$valarray2[] = $valforarray;
	
	
}
$array2 = array();
//$valarray2 = $valarray;
rsort($valarray2);
sort($valarray);

echo '<h1>Test Dasar PHP</h1>';
echo 'soal no 1 :';
echo '</br>';
echo 'Nilai ujian sebuah kelas tersimpan dalam sebuah string berikut :
	  $nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
	  Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi, (3) 7 nilai terendah dari nilai-nilai di atas.';
echo '</br></br>';
echo 'nilai rata-rata : '.$valconvert/21 .'</br>';
echo '7 nilai tertinggi : '.$valarray2[0].','.$valarray2[1].','.$valarray2[2].','.$valarray2[3].','.$valarray2[4].','.$valarray2[5].','.$valarray2[6].'</br>';
echo '7 nilai terendah  : '.$valarray[0].','.$valarray[1].','.$valarray[2].','.$valarray[3].','.$valarray[4].','.$valarray[5].','.$valarray[6];
echo '</br></br>';
echo 'soal no 2 :';
echo '</br>';
echo 'Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.';
echo '</br>';
$string    = "TranSISI";
$lowerCase = strtolower($string);
$upperCase = strtoupper($string);

$lowerDiff = similar_text($string, $lowerCase);
$upperDiff = similar_text($string, $upperCase);

echo "<br>";
echo "Lowercase:" . (strlen($string) - $upperDiff); // 6


?>