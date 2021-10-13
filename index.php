<?php

require_once 'Bicycle.php';

$velocipede = new Bicycle('pink');
var_dump($velocipede);


$velocipede->setCurrentSpeed(0);
var_dump($velocipede);

echo $velocipede->forward();
echo '<br> Vitesse du vélo : '.$velocipede->getCurrentSpeed().'km/h'.'<br>';
echo $velocipede->brake();
echo '<br> Vitesse du vélo : '.$velocipede->getCurrentSpeed().'km/h'.'<br>';
echo $velocipede->brake();

require_once 'cars.php';

$ferrari = new Car('Red', 20, 'Gaz');

echo $ferrari->start();
echo $ferrari->forward();
echo '<br> Vitesse du voiture :'.$ferrari->getCurrentSpeed().'km/h'.'<br>';
echo $ferrari->brake();
echo '<br> Vitesse du voiture :'.$ferrari->getCurrentSpeed().'km/h'.'<br>';
echo $ferrari->brake();
