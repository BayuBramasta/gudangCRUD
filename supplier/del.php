<?php
include '../koneksi.php'; 
if(isset($_GET['id']))
{
  mysqli_query($conn, "DELETE FROM tb_supplier WHERE id = '{$_GET['id']}'");
  header("Location: ../");
}
?>