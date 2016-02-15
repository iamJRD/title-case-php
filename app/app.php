<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/TitleCaseGenerator.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider, array(
      'twig.path' => __DIR__.'/../views/'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render("home.html.twig");
    });

    $app->get('/view_title_case', function() use ($app) {
        $new_title_case = new TitleCaseGenerator;
        $user_input_title_case = $new_title_case->makeTitleCase($_GET['phrase']);
        return $user_input_title_case;
    });
    return $app;
?>
