<html>
<head></head>
<body>Comptes<br>
<br>
<table>
<?php

if (isset ($_GET['idcompte'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "compte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idclient, numcompte, solde FROM compte WHERE idclient=" .$_GET['idcompte'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
		echo "<tr>";
		
		echo "<th>" . "Identification Client" . "</th><th>" . "Compte" . "</th><th>" . "Solde" . "</th>";
		
		echo "</tr>";
		
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		
        echo "<td>" . $row["idclient"]. "</td><td>" . $row["numcompte"].  " </td><td> " . $row["solde"]. "</td>";
		
		echo "</tr>";
    }
} else {
    echo "utilisateur inconnu";
}
$conn->close();
}
else 
	 echo "utilisation de script inconnu";


?>
</table>
</body>
</html>
