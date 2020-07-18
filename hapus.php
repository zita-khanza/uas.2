<?php
include "koneksi.php";



if(isset($_GET['id'])){
$id = $_GET['id'];

$sql= "DELETE FROM daftarbantuan WHERE id=$id";
$query = mysqli_query($db,$sql);
if($query){
    header('Location:tampildata.php');
}
else{
    die("gagal menghapus");
}


}



