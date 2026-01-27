<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>
</head>

<body>
<h1>ธิดารัตน์ บุญสุภา (ฟิล์ม)</h1>

<form method="post" action="">
กรอกคะแนน<input type="number" name="a" min = "0" max= "100"autofocus required>
<button type="submit" name="Submit">OK</button>
</form>


<?php
if (isset($_POST['Submit'])){
	
	$score = $_POST['a'];
	
	if ($score >= 80) {
		$grade = "A" ;
	} else if ($score >= 70) {
		$grade = "B" ;
	} else if ($score >= 60) {
		$grade = "C" ;
	} else if ($score >= 50) {
		$grade = "D" ;
	} else {
		$grade = "F" ;
	}
	echo "<hr>";
	echo "<b>คะแนน $score ได้เกรด $grade</b>" ;

}
	
?>

</body>
</html>