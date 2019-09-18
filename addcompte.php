
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

$numcompte = $_POST['numcompte']."<br>";
$idclient = $_POST['idclient']."<br>";
$solde= $_POST['solde']."<br>";


$SQL ="INSERT INTO solde(idcompte, numcompte, solde, idclient) VALUES(0, \"".$numcompte."\", \"".$solde."\", \"".$idclient.\")";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($SQL);

echo "<a href=ajoutcompte.php> ajouter un autre compte </a>"."<br>";
echo "<a href=index.php> retour à l'index' </a>"."<br>";

?>
