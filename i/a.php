<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>
</head>

<body>
<h1>ธิดารัตน์ บุญสุภา (ฟิล์ม)</h1>

<form method="post" action="">
	ชื่อภาค <input type="text" name="rname" autofocus required>
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>


<?php 
if(isset($_POST['Submit'])) {
	include_once("connectdb.php");
	$rname = $_POST['rname'];
	$sql2 = "INSERT INTO `regions` VALUES (NULL, '{$rname}')";
	mysqli_query($conn, $sql2) or die ("insert ไม่ได้");
	
	}
?>

<table border="1">
	<tr>
    	<th>รหัสภาค</th> 
		<th>ชื่อภาค</th>
    </tr>

<?php 
	include_once("connectdb.php");
	$sql = "SELECT * FROM `regions` ORDER BY `regions`.`r_id` ASC";
	$rs = mysqli_query($conn,$sql);
	
	while($data = mysqli_fetch_array($rs)){
		//echo $data['r_id']." ".$data['r_name']. "<br>";
		
?>
    <tr>
    	<td><?php echo $data['r_id'];?></td> 
		<td><?php echo $data['r_name'];?></td>
    </tr>
 
<?php } ?>
</table>
</body>
</html>
