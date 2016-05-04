<?php
/**
 * Created by PhpStorm.
 * User: 1509184
 * Date: 04/05/2016
 * Time: 11:53
 */
define ('SERVER','ap-cdbr-azure-east-c.cloudapp.net' );
define ('USER','b6bd56d8952a0d');
define ('PASSWORD','d9cd6971');
define ('HOST','CMM007ALDB-1509184');
$sercon=mysqli_connect (SERVER,USER,PASSWORD,HOST);

//if ($sercon->connect_error) {
   // die("Connection failed: " . $sercon->connect_error);
//}
//echo "Connected successfully";
