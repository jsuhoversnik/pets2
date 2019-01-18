<?php

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//create and instance of the Base class
$f3 = Base::instance();
//turn on fat free error reporting
$f3->set('DEBUG',3);

//define a default route
$f3->route('GET /', function(){
    echo '<h1>My Pets</h1>';
    echo '<a href="order">Order a pet</a>';
    //$view = new View;
    //echo $view->render('views/home.html');
});

$f3->route('GET /@pet', function ($f3, $params)
{
    print_r($params);
    $pet = $params['pet'];

    switch($pet) {

        case 'dog':
            echo "<p>Woof!</p>";
            break;

        case 'chicken':
            echo "<p>Cluck!</p>";
            break;

        case 'cat':
            echo "<p>Meow!</p>";
            break;

        case 'tiger':
            echo "<p>Rawr!</p>";
            break;

        case 'cow':
            echo "<p>Moo!</p>";
            break;

        default:
            $f3->error(404);
    }
});

//run fat free
$f3->run();