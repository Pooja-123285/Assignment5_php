<html>
<head>
<title>Count</title>
</head>
<body>
<?php
$file=fopen("file.txt","r");
$count = readfile("file.txt");
echo "<br>";
$str = file_get_contents("file.txt");
//Counter variable to store the count of vowels,consonant,digits and special character
$vCount = 0;
$cCount = 0;
$dCount = 0;
$sCount = 0;
//Converting entire string to lower case to reduce the comparisons
$str = strtolower($str);
for($i = 0; $i < strlen($str); $i++)
{
//Checks whether a character is a vowel
if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u')
{
//Increments the vowel counter
$vCount++;
}
//Checks whether a character is a consonant
else if($str[$i] >= 'a' && $str[$i] <= 'z')
{
//Increments the consonant counter
$cCount++;
}
//Checks whether a character is a consonant
else if($str[$i] >= '0' && $str[$i] <= '9')
{
//Increments the consonant counter
$dCount++;
}
else{
    $sCount++;
}
}
$line=count(file("file.txt"));
echo "Number of lines:".$line;
echo "<br>";
echo "Number of words:".str_word_count($str);
echo "<br>";
echo "Number of characters:".mb_strlen($str);
echo "<br>";
echo "Number of vowels : ".$vCount;
echo "<br>";
echo "Number of digits :".$dCount;
echo "<br>";
echo "Number of consonants :".$cCount;
echo "<br>";
echo "Number of special character :".$sCount- $dCount -1; 
echo "<br>";
		$data= fileSize("file.txt");
        echo " Size of the file is:".$data;
        fclose($file);
?>
</body>
</html>