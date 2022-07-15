<?php

$notes = [10, 20, 13];

$sum = array_sum($notes);
$count = count($notes);

echo "Vous avez ". round($sum / $count, 2) . " de moyenne";