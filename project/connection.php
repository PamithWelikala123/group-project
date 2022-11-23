<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="register_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
                      die("faild to connect!");
}
