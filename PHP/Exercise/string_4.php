<?php
$username = 'king';
echo $username;
echo '<hr />';
echo "$username";
echo '<hr />';
echo '$username';
echo '<hr />';

$string = "blablaa&gtb,c&ltdalla,he said&quot;i&#39;m fine&quot";
echo $string;
echo '<br />';
echo $username, 's';
echo "{ $username }s";
echo '<hr />';
echo "${ username } s";
echo '<hr />';
$string = 'abcdef';
echo $string{0};
$string{0} = 'aaaaaa中';
echo $string;
echo '<hr />';
$string{89} = 'q';
echo $string;
echo '<hr />';
$string{0} = '';
echo $string;
echo $string[1];