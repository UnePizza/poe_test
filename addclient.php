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

    echo $_POST['nom']."<br>";
    echo $_POST['birthdate']."<br>";
    $nom=$_POST['nom'];
    $birthdate=$_POST['birthdate'];

$SQL ="INSERT INTO client(idclient, nom, birthdate) VALUES(0, \"".$nom."\", \"".$birthdate."\")";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($SQL);


echo "<a href= ajoutcompte.html> ajouter un autre compte </a>"."<br>";
echo "<a href= index.php> retour à l'index' </a>"."<br>";

?>