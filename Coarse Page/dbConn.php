<?php

$db = mysqli_connect("localhost","root","","coarsepage");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>