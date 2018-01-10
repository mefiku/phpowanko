<html>
<link rel="stylesheet" type="text/css" href="./css/1512322053.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<h1 align=center style='font-family: comic sans ms' >Generator pytań</h1>
<style type="text/css">
input[type="text"]
{
	width:100%;
}

</style>
<hr>
</head>
<body >
<form action="generator_zapis2.php?db_name=pytania_e12" name="generator" method="post"> 
<?php

echo "Wpisz pytanie:<input type='text' name='pytanie'><br>";
for ($i=1;$i<=4;$i++)
	echo "Wpisz odpowiedź:<input type='text' name='odpowiedz$i'><br>";
echo "Wpisz numer prawidłowej odpowiedzi (1-4):<input type='text' name='prawidlowa' onkeydown=\"return ( event.ctrlKey || event.altKey 
                    || (48<event.keyCode && event.keyCode<53 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )\" maxlength='1'><br>";

?>
<input type='submit' name='submit' value='Wyślij pytanie'><br>




</body>
</html>
