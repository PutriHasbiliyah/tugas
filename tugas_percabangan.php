
<html>
<table>
<form method="post" action="tugas_percabangan.php">
	<tr>
		<td>Input Jumlah Pemakaian Air</td>
		<td><input type="text" name="input" placeholder="dalam m3" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="proses" value="Submit" /></td>
	</tr>
</table>
</html>

<?php

if(isset($_POST["proses"])){
	$input = $_POST["input"];
	if($input<=30){
		$biaya = $input * 150;
		echo "Total biayanya adalah $biaya";
	}elseif($input<=60){
		$biaya = ($input-30) * 170 + 4500;
		echo "Total biayanya adalah $biaya"; 
	}elseif($input<=90){
		$biaya = ($input-60) * 210 + 9600;
		echo "Total biayanya adalah $biaya"; 
	}else{
		$biaya = ($input-90) * 240 + 14850; 
		echo "Total biayanya adalah $biaya";
	}		
}
?>

