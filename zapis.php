<link rel="stylesheet" type="text/css" href="./css/1512322053.css" />
<?php 
function zapisDoPliku() 
{
$plik=file("pytania.txt");
$iloscPytan=count($plik);
//print_r($_POST);
$niesformatowanaLinijka[0]=$_POST["imie"];
for ($i=1;$i<=$iloscPytan;$i++)
{
	if (isset($_POST["odp$i"]))	
		$niesformatowanaLinijka[$i]=$_POST["odp$i"];
	else 
		$niesformatowanaLinijka[$i]=0;
}
$sformatowanaLinijka=implode(';',$niesformatowanaLinijka);
echo $sformatowanaLinijka;
$plikOdpowiedzi=fopen('odpowiedzi.txt','a');
fwrite($plikOdpowiedzi,"$sformatowanaLinijka".PHP_EOL);
fclose($plikOdpowiedzi);
};


zapisDoPliku();
?>	