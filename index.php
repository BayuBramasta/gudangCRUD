<?php
include 'koneksi.php';
include 'header.php';
include 'sidebar.php';
if(isset($_GET['page']))
{
	if($_GET['page']=='supplier')
	{
		include 'supplier/main.php';
	}elseif ($_GET['page']=='komputer') 
	{
		include 'komputer/main.php';
	}
}else
{
	include 'dashboard.php';
}
include 'footer.php';