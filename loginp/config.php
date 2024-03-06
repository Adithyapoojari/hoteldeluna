<?php
/*used for database configuration with user details*/
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

//try db connection
$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//CHECKING..

if($conn==false)
{
    die('Error:Cannot connect');
}
?>