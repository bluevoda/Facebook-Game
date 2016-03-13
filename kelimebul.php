<?php
$letters = $_GET["test"];
//echo $letters . "<br>";
$wantedLetters=str_split(rtrim($letters));

if(!file_exists("words.txt")){
	die();
}
$fileReader = fopen("words.txt", "r") or die("Unable to open file!");
while(!feof($fileReader)) {
	$lineString = strtolower(fgets($fileReader));
	$parsedLine = str_split(rtrim($lineString));
	if (count(array_intersect($parsedLine, $wantedLetters)) == count($parsedLine)) {
				echo $lineString . "<br />";
	}
}
fclose($myfile);
?>
