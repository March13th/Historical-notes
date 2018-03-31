<?php
// 临时转换
$var = 12;
var_dump((float) $var, (double) $var, (real) $var, (string) $var, (bool) $var, (bool) $var);
echo '<hr />';
var_dump((unset) $var, (array) $var, (object) $var);
echo '<hr />';
$string = '3king';
var_dump((int) $string, (integer) $string);
echo '<hr />';
$string = '';
var_dump((bool) $string);
echo '<hr />';
$var = true;
echo intval($var);
echo '<hr />';
echo floatval($var), '<hr />', doubleval($var);
echo '<hr />';
echo strval($var);
echo '<hr />';
$var = 'false';
echo boolval($var);