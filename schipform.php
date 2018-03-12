<html>
    <h1> Maak je eigen schip<></h1>
    
    <form method="POST" action="index.php">
        <input type="text" name="schipnaam" placeholder="schipnaam">
        <input type="text" name="geschiedenis" placeholder="geschiedenis">
        <input type="integer" name="kenmerk" placeholder="Kenmerk">
        <button type="submit" name="schipSubmitBtn">Schip Toevoegen</button>
    </form>
    
    
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "voorbeeldDb";

$schipnaam = $_POST['schipnaam'] ?? "";
$geschiedenis = $_POST['geschiedenis'] ?? "";
$kenmerk = $_POST['kenmerk'] ?? "";

if(isset($_POST['schipSubmitBtn'])) {$schipnaam = $_POST['schipnaam'];
$geschiedenis = $_POST['geschiedenis'];
$kenmerk = $_POST['kenmerk'];
insertSchip();
}       
$conn = mysqli_connect($servername, $username,$password,$db);

function insertSchip(){
    global $schipnaam;
    global $geschiedenis;
    global $kenmerk;

    $Nm = "INSERT INTO schepen (schipnaam) VALUES ".$schipnaam." ;";
    $GS = "INSERT INTO schepen (geschiedenis) VALUES ".$geschiedenis." ;";
    $KM = "INSERT INTO schepen (schipnaam) VALUES ".$kenmerk." ;";
    
    $conn->query($Nm,$GS,$KM);
  
}



