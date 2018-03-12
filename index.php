<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";
$db = "test_database";


$conn = mysqli_connect($servername,$username,$password,$db);

if($_POST){
  $scheepsnaam = $_POST['scheepsnaam'];
  $history = $_POST['history'];
  $kenmerk = $_POST['kenmerk'];

  $sql = "INSERT INTO schepen (scheepsnaam, history, kenmerk) VALUES ('$scheepsnaam','$history','$kenmerk')";
  $conn->query($sql);
}


$sqll = "SELECT * FROM schepen";
$result = $conn->query($sqll);
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    td {
      border: 1px solid black;
    }

  </style>
</head>
<body>



  <form action="index.php" method="post">
    <input type="text" name="scheepsnaam" placeholder="Naam">
    <input type="text" name="history" placeholder="Geschiedenis">
    <input type="number" name="kenmerk" placeholder="Kenmerk">
    <input type="submit" value="submit">
  </form>


  <table>
    <tr>
      <th>Naam</th>
      <th>Geschiedenis</th>
      <th>Kenmerk</th>
    </tr>

    <?php
    if($result->num_rows > 0):
      while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row["scheepsnaam"]; ?></td>
          <td><?= $row["history"]; ?></td>
          <td><?= $row["kenmerk"]; ?></td>
        </tr>
    <?php
      endwhile;
    endif;
     ?>
  </table>


</body>

</html>
