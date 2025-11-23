<?php
include '../koneksi.php'; 
if(isset($_POST['supplier'])&&isset($_POST['alamat'])&&isset($_POST['id']))
{
  $supplier = $_POST['supplier'];
  $alamat = $_POST['alamat'];
  $id = $_POST['id'];
  mysqli_query($conn, "UPDATE tb_supplier SET name = '$supplier', address = '$alamat' WHERE id = $id ");
  header("Location: ../index.php?page=supplier");
}
?>