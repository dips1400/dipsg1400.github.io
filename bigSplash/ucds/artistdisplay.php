<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artist Create</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <!--table display info-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <table class="table text-center table-hover">
  <thead class="table-dark">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Painting Description</th>
      <th scope="col">Painting Price</th>
      <th scope="col">Images</th>
    </tr>
    </thead>
    <tbody>
    

    <?php

include 'conn.php';
if(isset($_POST['submit'])&&!empty($_POST['submit']))
{
    extract($_POST);
    /*$sql = "INSERT into AP(pdescription,price,images) values('$pdescription','$price','$images')";
    $result = pg_query($conn,$sql);
    if($result==true)
    {
        echo "Record Inserted";
    }
    echo "Failed to insert record";*/
    $pdescription = $_POST['pdescription'];
    $price = $_POST['price'];
    $files = $_FILES['images'];

    print_r($pdescription);
    echo"<br>";
    print_r($price);
    echo"<br>";
    //print_r($files);

    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');
    
    if(in_array($filecheck,$fileextstored)){
        $destinationfile =  'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);

        $sql = "INSERT into ap(pdescription,price,images) VALUES('$pdescription','$price','$destinationfile')";

        $query = pg_query($conn,$sql);

        $displayquery = "SELECT * from ap";

        $querydisplay = pg_query($conn,$displayquery);

       // $row = pg_num_rows($displayquery);

        while($result = pg_fetch_array($querydisplay)){
            ?>

            <tr>
                <td><?php echo $result['apid']; ?></td>
                <td><?php echo $result['pdescription']; ?></td>
                <td><?php echo $result['price']; ?></td>
                <td><img src=" <?php echo $result['images']; ?>"
                height="100px" width="100px"></td>
            </tr>

            <?php
        }
    }else
    {
        echo "Extension is not matching";
    }
}

?>






    </tbody>
    </table>
                </div>
            </div>
        </div>










    </body>
</html>
