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
 //	print_r($_POST);
	$polaczenie=mysqli_connect($host, $login, $haslo, 'pytania');

	if(!$polaczenie)
		die('Nie można się połączyć: '.mysql_error());
		
//	$baza=mysqli_select_db('pytania', $polaczenie);	
//	if(!$baza)
//		die('Nie można otworzyć '. $nazwa.': '.mysql_error());

	//echo 'Połączono';
	$pytanie=$_POST['pytanie'];
	$odpowiedz1=$_POST['odpowiedz1'];
	$odpowiedz2=$_POST['odpowiedz2'];
	$odpowiedz3=$_POST['odpowiedz3'];
	$odpowiedz4=$_POST['odpowiedz4'];
	$prawidlowa=$_POST['prawidlowa'];
if (!is_null($pytanie) && !is_null($odpowiedz1) && !is_null($odpowiedz2) && !is_null($odpowiedz3) && !is_null($odpowiedz4) && !is_null($prawidlowa))
	{
		$sql="INSERT INTO $nazwa ( pytanie, odpowiedz1, odpowiedz2, odpowiedz3, odpowiedz4, prawidlowa) VALUES ( '$pytanie', '$odpowiedz1', '$odpowiedz2', '$odpowiedz3', '$odpowiedz4', '$prawidlowa');";	
//	echo $sql;

	if(!mysqli_query($polaczenie, $sql)) 
		{ 
		die('error:'.mysqli_error());
		}
	}
};

zapisDoBazyDanych();

?>
<script>
var q=document.referrer;
window.open(q);
window.close();
</script>