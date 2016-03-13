<?php
$letters = $_GET["test"];
//echo $letters . "<br>";
$wantedLetters=str_split(rtrim($letters));

if(!file_exists("words.txt")){
	die();
}
$myfile = fopen("words.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
	$str = strtolower(fgets($myfile));
	$line = str_split(rtrim($str));
	if (count(array_intersect($line, $wantedLetters)) == count($line)) {
				echo $str . "<br />";
	}
}
fclose($myfile);
ob_end_flush();
?>
