<?php 
/****************************************************** 
* connection.php 
* konfiguracja połączenia z bazą danych 
******************************************************/ 

function connection() 
{ 
    // serwer 
    $mysql_server = "localhost"; 
    // admin 
    $mysql_user = "root"; 
    // hasło 
    $mysql_pass = "Al@M@K0t@1!"; 
    // nazwa baza 
    $mysql_db = "pytania"; 
    // nawiązujemy połączenie z serwerem MySQL 
    $podlacz = mysqli_connect($mysql_server, $mysql_user, $mysql_pass, $mysql_db) or die('Brak połączenia z serwerem MySQL.'); 
    // łączymy się z bazą danych 
    //mysql_select_db($mysql_db,$podlacz) or die('Błąd wyboru bazy danych.'); 
	return $podlacz;
} 

?>