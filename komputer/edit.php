<?php
include '../koneksi.php'; 
if(isset($_POST['edit']))
{
  $id = $_POST['id'];
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $supplier = $_POST['supplier'];
  $year = $_POST['year'];
  mysqli_query($conn, "UPDATE tb_komputer SET brand = '$brand', model = '$model', supplier = $supplier, year = '$year' WHERE id_komputer = $id ");
  header("Location: ../index.php?page=komputer");
}
?>