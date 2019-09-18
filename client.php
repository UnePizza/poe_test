<html>
<head></head>
<body>Clients<br>
<br>
<table>
    <?php
    if (isset ($_SERVER['WINDIR'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "compte";
    }else{
        $servername = "172.17.0.2";
        $username= "root";
        $password = "a";
        $dbname="gestionb";
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT idclient, nom, birthdate, numcompte FROM client";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "- id: " . $row["idclient"].  " - Name: " . $row["nom"]. " " . $row["birthdate"]. " " . $row["numcompte"]. "<br>";
/*            echo "<a href="compte.php?user=". $row["idclient"] .">afficher compte de ' . $row["idclient"] .</a>"."<br>";
*/
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    echo "<a href= ajoutclient.html> ajouter un client </a>"."<br>";
    $conn->close();
    ?>

</table>
</body>
</html>
