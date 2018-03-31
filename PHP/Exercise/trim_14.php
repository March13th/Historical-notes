<?php
$string = ' abc ';
echo '!' . $string . '!';
/*
 * trim($string[,$charList]):默认去掉字符串两端的空格，
 * 也可以去掉指定字符串
 * ltrim($string[,$charList])
 * rtrim($string[,$charList])
 */

// echo '!'.trim($string).'!';
// echo '<hr />';
// $string='abcdbca';
// echo trim($string,'ab');
echo '<hr />';
echo '1' . ltrim($string) . '1';
echo '<hr />';
echo '1' . rtrim($string) . '1';