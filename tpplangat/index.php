<?php 
include "config.php";
$sql = "SELECT * FROM info_pelajar";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      
<table class="table">
    <thead>
        <tr>
        <th>Id</th>
        <th>Nama pelajar</th>
        <th>No NDP</th>
        <th>No Kad Pengenalan</th>
        <th>No telefon</th>
        <th>Jantina</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result ->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['namapelajar']; ?></td>
                    <td><?php echo $row['ndp']; ?></td>
                    <td><?php echo $row['nokp']; ?></td>
                    <td><?php echo $row['nohp']; ?></td>
                    <td><?php echo $row['jantina']; ?></td>

                    <td><a class="btn btn-info" href="tambah.php?id=<?php echo $row['id']; ?>
                    ">Tambah</a>&nbsp;<a class="btn btn-danger" href="padam.php?id=<?php echo $row['id']; ?>">Padam</a></td>

                    </tr>                       

        <?php       }

            }
        ?>                
    </tbody>
</table>
    </div> 
</body>
</html>