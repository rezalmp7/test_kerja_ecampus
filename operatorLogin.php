<?php
$no1 = 7;
$no2 = 2;
$no3 = 0;
$no4 = 8;
$no5 = 4;
$no6 = 0;

$i1 = 1;
while ($no1 >= $no2) {
    $no1 = $no1-$no2;
    $no3 = $i1++;
}
echo $no3;

$i2 = 1;
while ($no4 >= $no5) {
    $no4 = $no4-$no5;
    $no6 = $i2++;
}
echo $no6;

?>