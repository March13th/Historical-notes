<?php
$table = '<table border="1" width="80%">';
$table .= '<tr>';
$table .= '<td>a</td><td>b</td>';
$table .= '</tr>';
$table .= '</table>';
echo $table;
echo '<hr />';
$span .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . mt_rand(0, 9) . '</span>';
$span .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . mt_rand(0, 9) . '</span>';
$span .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . mt_rand(0, 9) . '</span>';
$span .= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . mt_rand(0, 9) . '</span>';
echo $span;
echo '<hr />';
$string = 'abcdefghigtkjfalkjfk';
echo strlen($string);
echo $string[mt_rand(0, strlen($string) - 1)];