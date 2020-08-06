<?php
$id = $_GET['id'];
include 'include/config.php';
$sql = "DELETE FROM authors WHERE id = $id";
if(mysqli_query($link,$sql)){
    mysqli_close($link);
    header('location:show_author.php');
    exit;
}  else {
    echo "Eorro Deleting Record." ;
}
?>