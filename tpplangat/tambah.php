<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $nama_pelajar = $_POST['namapelajar'];
    $no_ndp = $_POST['ndp'];
    $no_kp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
    $no_hp = $_POST['nohp'];

    $sql = "insert into info_pelajar (namapelajar, ndp, nokp, jantina, nohp)
    values ('$nama_pelajar','$no_ndp','$no_kp','$jantina','$no_hp')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;

    } 
    $conn->close(); 

  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>update info</title>
  </head>
  <body>
    
  <!DOCTYPE html>
<html>
<body>
    
    <form action="" method="POST">
        <fieldset>
            <legend>Info Pelajar</legend>
            Nama pelajar:<br>
            <input type="text" name="namapelajar">
            <br>
            No NDP:<br>
            <input type="text" name="ndp">
            <br>
            No Kad pengenalan:<br>
            <input type="text" name="nokp">
            <br>
            No telefon:<br>
            <input type="text" name="nohp">
            <br>
            Jantina:<br>
            <input type="radio" name="jantina" value="lelaki">Lelaki
            <input type="radio" name="jantina" value="perempuan">Perempuan
            <br><br>
            <input type="submit" name="submit" value="submit">

        </fieldset>

    </form>

</body>

</html>