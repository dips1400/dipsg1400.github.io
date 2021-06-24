<?php
    include 'conn.php';
    include 'artistdisplay.php';
    /*$pdescription = $_POST['pdescription'];
    $price = $_POST['price'];
    $files = $_FILES['$destinationfile'];*/

    $sql = "SELECT * FROM  ap";
    $result = pg_query($conn,$sql);
    ?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artist Create</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-g m-auto">
            <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Painting Description</th>
      <th scope="col">Painting Price</th>
      <th scope="col">Images</th>
      <th scope="col">Delete</th>
      <th scope="col">Upadte</th>
    </tr>
  </thead>
  <?php

    include 'conn.php';

    $sql = "SELECT * FROM AP";

    $query = pg_query($conn,$sql);

    while($result = pg_fetch_array($query)){




    ?>
    
  <tbody>
    <tr>
    <td><?php echo $result['apid']; ?></td>
                <td><?php echo $result['pdescription']; ?></td>
                <td><?php echo $result['price']; ?></td>
                <td><img src=" <?php echo $result['images']; ?>"
                height="100px" width="100px"></td>
                <td><a href="artistdelete.php?apid=<?php echo $result['apid']?>"><input type="button" class="btn btn-danger" value="Delete" name="delete"></a></td>
                <td><a href="artistupdate.php?apid=<?php echo $result['apid']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
    </tr>
    <?php
    }

    ?>
  </tbody>
  
</table>
            </div>
        </div>
    </div>
    </body>
</html>
