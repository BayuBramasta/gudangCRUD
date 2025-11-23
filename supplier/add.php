<?php
include '../koneksi.php'; 
if(isset($_POST['supplier'])&&isset($_POST['alamat']))
{
  $supplier = $_POST['supplier'];
  $alamat = $_POST['alamat'];
  mysqli_query($conn, "INSERT INTO tb_supplier (supplier, address) VALUES ('$supplier', '$alamat');");
  header("Location: ../index.php?page=supplier");
}
?>