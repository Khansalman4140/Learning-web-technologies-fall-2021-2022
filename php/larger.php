<?php
function largest_number($a, $b, $c) 
{
$max_num = $a;

 if ($a >= $b && $a >= $c)

$max_num = $a;

elseif ($b >= $a && $b >= $c)

$max_num = $b;

else

$max_num = $c;

echo "Largest number among $a, $b and $c is: <b> $max_num </b>";
}

largest_number(20, 60, 90);
?>