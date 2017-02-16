<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../src/RockPaperScissors.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    if (empty($_SESSION['list_of_answers'])) {
        $_SESSION['list_of_answers'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__ . '/../views/'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('game.html.twig', array('games' => RockPaperScissors::getAll()));
    });

    $app->post("/game", function() use ($app) {
        $player_one = $_POST['player-one'];
        $player_two = $_POST['player-two'];

        $new_game = new RockPaperScissors($player_one, $player_two);
        $win = $new_game->checkInput($player_one, $player_two);
        $new_game->save();
        return $app['twig']->render('win.html.twig', array('winner' => $win));
    });

    $app->post('/delete', function() use ($app) {
        RockPaperScissors::deleteAll();
        return $app['twig']->render('delete.html.twig');
    });

    return $app;
?>
