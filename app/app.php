<?php

    require_once __DIR__."/../vendor/autoload";

    $app = new Silex\Application();

    $app->get("/", function() {

    });

    return $app;

?>
