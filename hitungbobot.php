<!DOCTYPE html>
<html>
<body>


<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">HITUNG BOBOT</h2>
<?php
$host='localhost';
$user='id7294462_luthfi';
$pass='alenatore';
$database='id7294462_dbstbi';
$conn=new mysqli($host,$user,$pass,$database) or die('MySql Tidak Connect');
//hitung index
mysqli_query($conn, "TRUNCATE TABLE tbindex");
$resn = mysqli_query($conn, "INSERT INTO tbindex(`Term`, `DocId`, `Count`) SELECT `token`,`nama_file`,count(*) FROM dokumen group by `nama_file`,token");
	//$n = mysqli_num_rows($resn);

//berapa jumlah DocId total?, n
	$DocId = mysqli_query($conn, "SELECT DISTINCT DocId FROM tbindex");
	$n = mysqli_num_rows($DocId);
	
	//ambil setiap record dalam tabel tbindex
	//hitung bobot untuk setiap Term dalam setiap DocId
	$resBobot = mysqli_query($conn, "SELECT * FROM tbindex ORDER BY Id");
	$num_rows = mysqli_num_rows($resBobot);
	print("Terdapat " . $num_rows . " Term yang diberikan bobot. <br />");
	while($rowbobot = mysqli_fetch_array($resBobot)) {
		//$w = tf * log (n/N)
		$term = $rowbobot['Term'];		
		$tf = $rowbobot['Count'];
		$id = $rowbobot['Id'];
		
		//berapa jumlah dokumen yang mengandung term tersebut?, N
		$resNTerm = mysqli_query($conn, "SELECT Count(*) as N FROM tbindex WHERE Term = '$term'");
		$rowNTerm = mysqli_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'];
		
		$w = $tf * log($n/$NTerm);
		
		//update bobot dari term tersebut
		$resUpdateBobot = mysqli_query($conn, "UPDATE tbindex SET Bobot = $w WHERE Id = $id");		
  	} //end while $rowbobot

?>
</div>
</body>
</html>