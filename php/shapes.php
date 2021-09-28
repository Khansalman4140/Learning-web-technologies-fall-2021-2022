<?php

function star_print(){
$n=3;
for ($i = 0; $i < $n; $i++)
{
for($j = 0; $j <= $i; $j++ )
{
echo "* ";
}
echo "<br>";
}
}

function number_print(){
$rows = 3;
for($i = $rows; $i>=1; --$i)
{
for($j = 1; $j<=$i ; ++$j)
{
echo ($j);
}
echo "<br>";
}
}

function alphabet_print()
{
$n=3;
$alphabet = 'A';
for ($i = 0; $i < $n; $i++)
{
for($j = 0; $j <= $i; $j++ )
{
echo "$alphabet ";
++$alphabet;
}

echo "<br>";
}
}

echo "<table border= >
<tr>
<td>".star_print()."</td>
<td>".number_print()."</td>
<td>".alphabet_print()."</td>
</tr>
</table>"

?>