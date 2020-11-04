<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function conectar(){
	$dsn = "mysql:host=localhost;dbname=escola";
	$user = "root";
	$senha = "";
	$conn = new PDO($dsn,$user,$senha);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $conn;
}

