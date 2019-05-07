<?php
$db=mysqli_connect("localhost","root","","CompanyRegSysDB");

if (!$db)
{
    die("Connection Failed: ".mysqli_connect_error());
}

?>
