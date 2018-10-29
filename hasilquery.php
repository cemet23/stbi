<!DOCTYPE html>
<html>

<!-- Page content -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">HASIL QUERY</h2>
<?php

$konek = mysqli_connect("localhost","id7294462_luthfi","alenatore","id7294462_dbstbi");

$servername = "localhost";
$username = "id7294462_luthfi";
$password = "alenatore";
$dbname = "id7294462_dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` where token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` WHERE MATCH (token,tokenstem,tokenstem2) AGAINST ('$hasil' IN BOOLEAN MODE)";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama file: " . "<a href=" . $row["nama_file"]. ">" . $row["nama_file"] . "</a>" . " - Token: " . $row["token"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</div>
  
<!-- End Page Content -->

</body>
</html>
