<?php

yaz('Lorem ipsum dolor sit amet.');

/*yaz(5+6);

function yaz ($metin) {
    echo $metin."<br>";
}*/

yaz(topla(5,10));
echo(topla(3,8));

function yaz($metin){
    echo $metin."<br>";
}

function topla($s1, $s2)
{
    return $s1+$s2;
}

