<?php
if (3 > 2) :
    echo 'this is true';
 else :
    echo 'this is false';
endif;

echo '<hr />';
$username = 'king';
if ($username == 'king') :
    echo 'hello king';
 elseif ($username == 'admin') :
    echo 'hello admin';
 elseif ($username == 'queen') :
    echo 'hello queen';
 else :
    echo 'this is test';
endif;