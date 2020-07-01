<?php
/**
* Created by PhpStorm.
* User: User
* Date: 01.05.2019
* Time: 19:22
*/
//$connection_string=("host=//localhost
//port=5432
//dbname=postgres
//user=postgres
//password=postgres");
//$con = pg_connect("host=//localhost port=5432 dbname=twitter user=postgres password=postgres")
$con = pg_connect("host=localhost
port=5432
dbname=postgres
user=postgres
password=postgres")
or die ("cannot connect server ");
?>