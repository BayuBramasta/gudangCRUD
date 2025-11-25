<?php
include '../koneksi.php'; 
if(isset($_GET['id']))
{
  mysqli_query($conn, "DELETE FROM tb_supplier WHERE id_supplier = '{$_GET['id']}'");
  header("Location: ../index.php?page=supplier");
}
?>