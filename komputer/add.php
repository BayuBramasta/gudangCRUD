<?php
include '../koneksi.php'; 
if(isset($_POST['add']))
{
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $supplier = $_POST['supplier'];
  $year = $_POST['year'];
  mysqli_query($conn, "INSERT INTO tb_komputer (brand, model, supplier, year) VALUES ('$brand', '$model', $supplier, '$year');");
  header("Location: ../index.php?page=komputer");
}
?>