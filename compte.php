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
    $sql = "SELECT idcompte, numcompte, solde, idclient FROM compte";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "- id: " . $row["idcompte"].  " - Numero compte: " . $row["nom"]. "- solde " . $row["birthdate"]. "-ID client " . $row["numcompte"]. "<br>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    echo "<a href= ajoutcompte.php> ajouter un compte </a>"."<br>";
    $conn->close();
    ?>

</table>
</body>
</html>