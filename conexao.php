<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME' , 'dbloja1');

$opc= array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

$conn = new PDO('mysql:host=' .HOST. ';dbname='.DBNAME. ';' , USER ,PASS, $opc);