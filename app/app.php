<?php

    require_once(__DIR__.'/../vendor/autoload.php');
    require_once(__DIR__.'/../src/RepeatCounter.php');
    date_default_timezone_set('America/New_York');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app)
    {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/results', function() use ($app)
    {
      $word = $_POST['user-word'];
      $sentence = $_POST['user-sentence'];
      $new_RepeatCounter = new RepeatCounter;
      $new_RepeatCounter->countRepeats($word, $sentence);
      return $app['twig']->render('results.html.twig', array('word_count'=>$new_RepeatCounter, 'word'=>$word, 'sentence'=>$sentence));
    });

    return $app;
?>
