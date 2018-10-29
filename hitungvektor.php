<!DOCTYPE html>
<html>
<body>


<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">HITUNG VEKTOR</h2>
<?php
$host='localhost';
$user='id7294462_luthfi';
$pass='alenatore';
$database='id7294462_dbstbi';
$conn=mysql_connect($host,$user,$pass);
mysql_select_db($database);
//hitung index
mysql_query("TRUNCATE TABLE tbvektor");
//ambil setiap DocId dalam tbindex
	//hitung panjang vektor untuk setiap DocId tersebut
	//simpan ke dalam tabel tbvektor
	$resDocId = mysql_query("SELECT DISTINCT DocId FROM tbindex");
	
	$num_rows = mysql_num_rows($resDocId);
	print("Terdapat " . $num_rows . " dokumen yang dihitung panjang vektornya. <br />");
	
	while($rowDocId = mysql_fetch_array($resDocId)) {
		$docId = $rowDocId['DocId'];
	
		$resVektor = mysql_query("SELECT Bobot FROM tbindex WHERE DocId = '$docId'");
		
		//jumlahkan semua bobot kuadrat 
		$panjangVektor = 0;		
		while($rowVektor = mysql_fetch_array($resVektor)) {
			$panjangVektor = $panjangVektor + $rowVektor['Bobot']  *  $rowVektor['Bobot'];	
		}
		
		//hitung akarnya		
		$panjangVektor = sqrt($panjangVektor);
		
		//masukkan ke dalam tbvektor		
		$resInsertVektor = mysql_query("INSERT INTO tbvektor (DocId, Panjang) VALUES ('$docId', $panjangVektor)");	
	} //end while $rowDocId
?>
</div>
</body>
</html>