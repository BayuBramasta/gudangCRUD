<?php
include '../koneksi.php'; 
if(isset($_GET['id']))
{
  mysqli_query($conn, "DELETE FROM tb_komputer WHERE id_komputer = '{$_GET['id']}'");
  header("Location: ../index.php?page=komputer");
}
?>