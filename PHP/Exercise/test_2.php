<?
$a = 1;
$b = &$a;
echo "a=$a";
echo "b=$b";
echo "<hr />";
$a = 2;
echo "a=$a";
echo "b=$b";
echo "<hr />";
unset($b);
echo "<hr />";
echo "a=$a";
echo "b=$b";
echo var_dump($b);
