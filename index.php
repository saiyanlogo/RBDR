
<html>
<body>

<form action="test.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Read file" name="submit">
</form>

</body>
</html>

<?php

$target_dir = "romtest/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {	
	echo $_FILES["fileToUpload"]["tmp_name"]."<br>";
	
	$handle = fopen($_FILES["fileToUpload"]["tmp_name"], "rb");
	$contents = fread($handle, (1024 / 5) /*filesize($_FILES["fileToUpload"]["tmp_name"])*/);
	echo "<br><br>".$contents."<br><br>";
	fclose($handle);
	
	if(strpos($contents, '$', 0) !== false) {
		echo "$ Position: ".strpos($contents, '$', 0)."<br><br>";
	}
	if(strpos($contents, 'Qi', 0) !== false) {
		echo "Qi Position: ".strpos($contents, 'Qi', 0)."<br><br>";
	}
	if(strpos($contents, '!=', 0) !== false) {
		echo "!= Position: ".strpos($contents, '!=', 0)."<br><br>";
	}
	if(strpos($contents, 'R', 0) !== false) {
		echo "R Position: ".strpos($contents, 'R', 0)."<br><br>";
	}
	if(strpos($contents, 'FJJ', 0) !== false) {
		echo "FJJ Position: ".strpos($contents, 'FJJ', 0)."<br><br>";
	}
	if(strpos($contents, '\'1', 0) !== false) {
		echo "'1 Position: ".strpos($contents, '\'1', 0)."<br><br>";
	}
	if(strpos($contents, 'X', 0) !== false) {
		echo "X Position: ".strpos($contents, 'X', 0)."<br><br>";
	}
	if(strpos($contents, '3', 0) !== false) {
		echo "3 Position: ".strpos($contents, '3', 0)."<br><br>";
	}
	if(strpos($contents, 'K', 0) !== false) {
		echo "K Position: ".strpos($contents, 'K', 0)."<br><br>";
	}
	if(strpos($contents, 'V', 0) !== false) {
		echo "V Position: ".strpos($contents, 'V', 0)."<br><br>";
	}
	if(strpos($contents, 'r', 0) !== false) {
		echo "r Position: ".strpos($contents, 'r', 0)."<br><br>";
	}
	if(strpos($contents, 'Ms', 0) !== false) {
		echo "Ms Position: ".strpos($contents, 'Ms', 0)."<br><br>";
	}
	if(strpos($contents, 'aX', 0) !== false) {
		echo "aX Position: ".strpos($contents, 'aX', 0)."<br><br>";
	}
	if(strpos($contents, 'v#', 0) !== false) {
		echo "v# Position: ".strpos($contents, 'v#', 0)."<br><br>";
	}
	if(strpos($contents, '8', 0) !== false) {
		echo "8 Position: ".strpos($contents, '8', 0)."<br><br>";
	}
	if(strpos($contents, '@', 0) !== false) {
		echo "@ Position: ".strpos($contents, '@', 0)."<br><br>";
	}
	if(strpos($contents, 'o', 0) !== false) {
		echo "o Position: ".strpos($contents, 'o', 0)."<br><br>";
	}
	if(strpos($contents, '0', 0) !== false) {
		echo "0 Position: ".strpos($contents, '0', 0)."<br><br>";
	}
	if(strpos($contents, '%', 0) !== false) {
		echo "% Position: ".strpos($contents, '%', 0)."<br><br>";
	}
	if(strpos($contents, 'c', 0) !== false) {
		echo "c Position: ".strpos($contents, 'c', 0)."<br><br>";
	}
	if(strpos($contents, 'N8', 0) !== false) {
		echo "N8 Position: ".strpos($contents, 'N8', 0)."<br><br>";
	}
	if(strpos($contents, '4', 0) !== false) {
		echo "4 Position: ".strpos($contents, '4', 0)."<br><br>";
	}
	if(strpos($contents, '>Dx', 0) !== false) {
		echo ">Dx Position: ".strpos($contents, '>Dx', 0)."<br><br>";
	}
	if(strpos($contents, 'r!', 0) !== false) {
		echo "r! Position: ".strpos($contents, 'r!', 0)."<br><br>";
	}
} 
?>
