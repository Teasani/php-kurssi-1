<?php
//$array = ['1'=> 'A', '2' => 'B', '3'=> 'C', '4'=> 'D', '5'=> 'E', '6'=> 'F', '7'=> 'G', '8'=> 'H', '9'=> 'I', '10'=> 'J', '11'=> 'K', '12'=> 'L', '13'=> 'M', '14'=> 'N', '15'=> 'O', '16'=> 'P', '17'=> 'Q', '18'=> 'R', '19'=> 'S', '20'=> 'T', '21'=> 'U', '22'=> 'V', '23'=> 'W', '24'=> 'X', '25'=> 'Y', '26'=> 'Z',];

//echo $array['13'];

$kirjaimet = range ('A', 'Z'); // ['A','B','C',...'Z']
$numerot = range (1, 26); // [1,2,3,4...,26]
$lopputulos = array_combine($kirjaimet, $numerot);

echo $lopputulos['M'];