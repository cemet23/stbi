<!DOCTYPE html>
<html>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
#tabel {
    border-collapse: collapse;
    width: 100%;
}

#tabel td, #tabel th {
    border: 1px solid #ddd;
    padding: 8px;
}

#tabel tr:nth-child(even){background-color: #f2f2f2;}

#tabel tr:hover {background-color: #ddd;}

#tabel th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: grey;
    color: white;
}
</style>
<body>


<!-- Page content -->
<div class="w3-container w3-content w3-center w3-padding-64" id="band">
    <h2 class="w3-wide">DOKUMEN</h2>
		<?php
//membuat koneksi ke database
$host='localhost';
$user='id7294462_luthfi';
$pass='alenatore';
$database='id7294462_dbstbi';

$conn=new mysqli($host,$user,$pass,$database) or die('MySql Tidak Connect');
?>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table id="tabel">  
<tr>
    <th> Nama File </th>
    <th> Deskripsi </th>
    <th> Tanggal Upload </th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From upload" ;  //menampikan SEMUA


$hasil=mysqli_query ($conn, $queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['deskripsi']."</td>
        <td>".$data['tgl_upload']."</td>
        
        </tr> 
        ";
        
}

?>

</table>
	</div>
  
<!-- End Page Content -->

</body>
</html>
