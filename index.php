<?php
//this test file for init github repo
for ($i = 4; $i <= 28; $i++) {
    $t = $i + 2;
    echo 't =' . $t . '  y= ' . (int)(2 * $i * $i + 5.5 / $i - 2) . '<br>';
}
//

$array = [];
for ($i = 0; $i < 15; $i++) {
    $array[] = rand(1, 100);
    echo $array[$i] . ' ';
}

$sum = 0;
$n = $array[rand(2, 13)];
$i = 0;
echo '<br>n=' . $n . '<br>';
while ($array[$i] != $n) {
    $sum += $array[$i];
    $i++;
}
echo '<br>'.$array[$i - 1].'<br>';
echo $array[$i + 1].'<br>';
echo 'Sum=' . $sum;

