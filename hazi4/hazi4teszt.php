<?php

$data = ['apple' => 5, 'banana' => 3, 'cherry' => 8];
$manipulator = new ArrayManipulator($data);


echo $manipulator->apple; 
echo $manipulator->nonexistent; 


$manipulator->orange = 10;
echo $manipulator->orange; 


echo isset($manipulator->banana) ? 'Van' : 'Nincs'; 
echo isset($manipulator->nonexistent) ? 'Van' : 'Nincs'; 

unset($manipulator->cherry);
echo isset($manipulator->cherry) ? 'Van' : 'Nincs'; 

echo $manipulator; 


$clonedManipulator = clone $manipulator;
$clonedManipulator->apple = 2;
echo $manipulator->apple; 
echo $clonedManipulator->apple; 
