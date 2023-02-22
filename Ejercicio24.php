<?php


$v ='Ronaldo';unset($v);

if (!isset($v)) print('La variable ya no existe');
   

//empty

print(empty($v)); //devuelve el true
$v = " ";
print(empty($v)); //devuelve tb. true

?>