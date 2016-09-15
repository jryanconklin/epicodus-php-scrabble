<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->post("/score", function() use ($app) {
        $user_scrabble = new Scrabble();
        $user_scrabble = $user_scrabble->scoreCheck3($_POST['input']);
        return $app['twig']->render('results.html.twig', array('score' => $user_scrabble));
    });

    return $app;


?>
