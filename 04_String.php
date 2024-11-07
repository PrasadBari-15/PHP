<?php
echo "<h3>String</h3>";
$string ="This is string";
$string2 ="My Name is Prasad";
echo $string;
echo "<br>",$string2;

//Find the length of string
$length=strlen($string);
$lenn = strlen($string2);
echo "<br>Length of string is:",$length;
echo "<br>Length of 2nd String is:".$lenn." thank u";

//total no. words
echo "<br>Total number of word count is:". str_word_count($string);

//Reverse string function
echo "<br>";
echo strrev($string2);

//search any word
echo "<br>";
echo strpos($string2,"Name");

//replace word
echo "<br>";
echo str_replace("Name","Self",$string2);


?>