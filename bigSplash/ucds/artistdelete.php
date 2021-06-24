<?php

include 'conn.php';



$apid = $_POST['apid'];
$sql = "DELETE  FROM ap where ap.apid='$apid'";
pg_query($conn, $sql);
$result = pg_query($conn,$sql);
    if($result==true){
        header('location:artistdisplay2.php');
    }
    else{
        echo "Failed to delete . PLEASE CHECK YOUR INPUTS";
    }

/*$apid = $_POST['apid'];

$sql = " DELETE FROM ap WHERE ap.apid='$apid'";

pg_query($conn, $sql);

$result = pg_query($conn,$sql);
    if($result==true){
        header('location:ucds/artistdisplay2.php');
    }
    else{
        echo "Failed to delete . PLEASE CHECK YOUR INPUTS";
    }*/

?>
