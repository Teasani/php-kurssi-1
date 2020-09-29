<?php
//$array = ['1'=> 'A B C D E F G H I J K', '2' => 'K J I H G F E D C B A'];
//print $array['1'] . "<br>";
//print $array['2'];

$array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];

for($i = 0; $i < 11; $i++){
    echo $array[$i] . " ";
}

echo "<br>";

$array_toinen = array_reverse($array);

foreach($array_toinen as $arvo) {
    echo $arvo . " ";
}