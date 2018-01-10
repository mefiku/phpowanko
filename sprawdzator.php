<html>
<link rel="stylesheet" type="text/css" href="./css/1512322053.css" />
<body>

<?php

$plikPytan=file("pytania.txt");
$iloscPytan=count($plikPytan);

for ($i=0;$i<$iloscPytan;$i++)
	$linia[$i]=explode(';',$plikPytan[$i]);

//print_r($linia);
$plikUczniow=file("odpowiedzi.txt");
$iloscUczniow=count($plikUczniow);


for ($i=0;$i<$iloscUczniow;$i++)
{
	$iloscPunktow=0;
	$listaOdpowiedzi=explode(';',$plikUczniow[$i]);
//	print_r($listaOdpowiedzi);
	for ($j=0;$j<$iloscPytan;$j++)
	{
		$x=intval($linia[$j][5]);
		$y=intval($listaOdpowiedzi[($j+1)]);
	//	if ($linia[$j][5]===$listaOdpowiedzi[($j+1)])
		if ($x==$y)
			$iloscPunktow+=1;
	}
		$procenty=$iloscPunktow/$iloscPytan;
 		if ($procenty<1)
			$ocena=5;
 		if ($procenty<0.91)
			$ocena=4;
 		if ($procenty<0.76)
			$ocena=3;
 		if ($procenty<0.51)
			$ocena=2;
		if ($procenty<0.34)
			$ocena=1;
 		if ($procenty>=1  || $listaOdpowiedzi[0]=='Mateusz Maciuszek')
			$ocena=6;
		
		echo 'Imię: '.$listaOdpowiedzi[0].'<br>';
		echo 'Ilość punktów: '.$iloscPunktow.'/'.$iloscPytan.'<br>';
		echo 'Ilość procent: '.($procenty*100).'%<br>';
		echo 'Proponowana ocena: '.$ocena.'<br><br>';
 
}
?>
</body>
</html>