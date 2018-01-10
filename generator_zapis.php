<?php 
function zapisDoPliku()
{
	print_r($_POST);
	if (isset($_POST['pytanie']))
	{
			$temp[0]=$_POST['pytanie'];
		for ($i=1;$i<=4;$i++)
			$temp[$i]=$_POST["odpowiedz$i"];
		$temp[5]=$_POST['prawidlowa'];
		$temp2=implode(';',$temp);

		if ($temp2!==';;;;;'||$temp[0]!=null) 
		{
			$plikPytania=fopen('pytania.txt','a');
			fwrite($plikPytania,$temp2.PHP_EOL);
			fclose($plikPytania);
		}
	}
}


function zapisDoBazyDanych()
{
	$host="localhost";
	$login="root";
	$haslo="Al@M@K0t@1!";
	$nazwa=$_GET['db_name'];
	$idnext=0;
 //	print_r($_POST);
	$polaczenie=mysqli_connect($host, $login, $haslo, 'egzamin');

	if(!$polaczenie)
		die('Nie można się połączyć: '.mysql_error());
		

	$pytanie=$_POST['pytanie'];
	$odpowiedz[0]=$_POST['odpowiedz1'];
	$odpowiedz[1]=$_POST['odpowiedz2'];
	$odpowiedz[2]=$_POST['odpowiedz3'];
	$odpowiedz[3]=$_POST['odpowiedz4'];
	$prawidlowa=$_POST['prawidlowa'];
if (!empty($pytanie) && !empty($odpowiedz[0]) && !empty($odpowiedz[1]) && !empty($odpowiedz[2]) && !empty($odpowiedz[3]) && !empty($prawidlowa))
	{
		$sql="INSERT INTO pytania (Nazwa, Il_graf, Grafika) VALUES ( '$pytanie', 0, 'brak');";	
		echo $sql;

		if(!mysqli_query($polaczenie, $sql))
		{ 
			die('error:'.mysqli_error());
		}
		$idnext = mysqli_insert_id($polaczenie);
		
		for ($i=0;$i<=3;$i++)
		{
			if ($prawidlowa==$i) 
			{
				$zmienna = 1;
			}
			else 
			{
				$zmienna = 0;
			}
			$sql="INSERT INTO odpowiedzi (ID_pyt, Nazwa_o, Czy) VALUES ( $idnext, '$odpowiedz[$i]', $zmienna);";
		echo $sql;			
			if(!mysqli_query($polaczenie, $sql)) 
			{ 
				die('error:'.mysqli_error());
			}
		}
	}
	
//	echo $sql;

};

zapisDoBazyDanych();

?>
<script>
var q=document.referrer;
window.open(q);
window.close();
</script>