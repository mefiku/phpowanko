<HTML>
<link rel="stylesheet" type="text/css" href="./css/1512322053.css" />
<HEAD>
<meta http-equiv="content-type" 
   content="text/html; charset=windows-1250">
<meta http-equiv="Content-Language" content="pl">
<TITLE>Placeholder</TITLE>
</HEAD>
<BODY>
<FORM NAME="form" action="zapis.php" method="post">
<HR>
<P ALIGN="CENTER"><FONT SIZE=3 COLOR="#CC0066"><B>Placeholder dzia≈Çu</B></FONT></P>
<HR>
<?php
// pod≈ÇƒÖczamy plik  connection.php 
require "connection.php"; 
// wywo≈Çujemy funkcjƒô connection() 
$podlacz=connection();
//zamkniƒôcie bazy danych
mysqli_close($podlacz);

$plik=file("pytania.txt");
$iloscPytan=count($plik);
for ($i=0;$i<$iloscPytan;$i++)
	$linia[$i]=explode(';',$plik[$i]);


print_r($linia[1]);
	echo '<br>';
	
	
	
for ($i=0;$i<$iloscPytan;$i++)
{
	$k=$i+1;
	echo '<b>'.($i+1).". ".$linia[$i][0]."</b><br>\r\n";
	for ($j=1;$j<5;$j++)
//		echo "<P><INPUT NAME=\"odp$i\" TYPE=\"radio\" VALUE=\"value$i-$j\">&nbsp&nbsp".$linia[$i][$j]."\r\n";
		echo "<P><INPUT NAME=\"odp$k\" TYPE=\"radio\" VALUE=\"$j\">&nbsp&nbsp".$linia[$i][$j]."\r\n";
	echo '<br><hr>';
}



//	print_r($linia);
/*
<P ALIGN="CENTER"><IMG SRC="test.gif" WIDTH=480 HEIGHT=130 ALIGN="center"></p>
<P ALIGN="CENTER"><IMG SRC="wiadom.gif" WIDTH=460 HEIGHT=30 ALIGN="center"></p>


<BR>
<BR>
<HR>
<P ALIGN=CENTER><FONT SIZE=4 COLOR="#660099">Wpisz 
swoje imiÅEi nazwisko do tabelki poniøej,<BR> wciúnij klawisz PODSUMOWANIE i podnieÅE
rÍkÅEdo gÛry.</FONT></P>
<P ALIGN="CENTER"><FONT SIZE=3 COLOR="#FF0099">Tu wpisz swoje imiÅEi nazwisko:</FONT> <INPUT NAME="imie">
<INPUT TYPE="button" Value="Podsumowanie" OnClick="oblicz()"></P>
</FORM>
<P ALIGN="right"><FONT SIZE=2 COLOR="#660099">Opracowanie: Ma≥gorzata Jasyk</FONT></P>
*/
?>

<BR>
<BR>
<P ALIGN="CENTER"><FONT SIZE=3 COLOR="#FF0099">Tu wpisz swoje imiƒô i nazwisko:</FONT> <INPUT NAME="imie">
<INPUT TYPE="submit" name="submit" Value="Podsumowanie" OnClick="czysc()"></P>
</FORM>
<P ALIGN="right"><FONT SIZE=1 COLOR="#66ff99">Opracowanie: <s>AAAAAAAAAAA</s><font style="font-family: Comic Sans MS"> Mateusz Maciuszek</font></FONT></P>
<SCRIPT>
function czysc()	
{	

<?php
for ($i=0;$i<$iloscPytan;$i++)
{
	for ($j=0;$j<4;$j++)
	{
		echo "document.forma1.odp".$i.'['.$j.']'."checked=false\r\n";
	}
}
?>
document.forma1.imie.value=""
}
</SCRIPT>

</BODY>
</HTML>
