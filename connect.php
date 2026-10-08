<?php 

$obj = new mysqli("localhost","root","","mca_program");

if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit;
}


?>