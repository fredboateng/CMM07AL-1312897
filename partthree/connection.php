<?php
/**
 * Created by PhpStorm.
 * User: 1312897
 * Date: 29/04/2016
 * Time: 21:14*/

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','bceed72e8f396d');
define('DB_PASSWORD', '1e3ecefa');
define('DB_DATABASE', 'CMM007ALDB-1312897');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
//echo "success connect to db";
}