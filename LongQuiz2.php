<html>
<head><title>Publeo_LongQuiz2</title></head>
<body bgcolor=A2E4B8 align=center>
<?php
echo"<br><u><b>Problem 1</b></u><br>";
$sr = 600;
$salary = $sr*15;
$TA = $salary*0.30;
$np = $salary-$TA;
echo"<br>"."Salary Rate (per day): ".$sr;
echo"<br>"."Salary(15 days): ".$salary;
echo"<br>"."Taxable Amount(30%): ".$TA;
echo"<br>"."Net Pay: ".$np;
echo"<br><br><br>";

echo"<br><u><b>Problem 2</b></u><br>";
$counter=1;
$num=0;
while ($counter<51)
	{
	echo " <br><br><b>Current Sum: </b>".$num;	
	echo "<br>Adding: ".$num."+".$counter."<br>";
	$num=$num+$counter;
	$counter++;
	echo "Resultant Sum: ".$num;	
	}


?>
</body>
</html>