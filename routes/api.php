<?php

use Illuminate\Http\Request;

$router->group(["prefix" => "tasks"], function ($router) {
    $router->post("", "Tasks@store");
    $router->get("", "Tasks@index");
    $router->get("{task}", "Tasks@show");
    $router->put("{task}", "Tasks@update"); 
    $router->delete("{task}", "Tasks@destroy"); 

});

