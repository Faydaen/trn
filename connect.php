<?php




function соединение(){
    $dbname='postgres';
    $host='localhost';
    $port='22223';
    $user='postgres';
    $password='qwerty';

    $connection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    if (!$connection) {
        echo "Произошла ошибка\n";
        exit;
    }
    return $connection;
}

function dd($entity)
{
    var_dump($entity);
    die();
}

function getLogo($universe)
{
    $logos = [
        'mortal kombat' => 'mortal_kombat.png',
        'harry potter' => 'harry_potter.png',
        'the hunger games' => 'the_hunger_games.png',
        'the witcher' => 'the_witcher.png',
        'game of thrones' => 'game_of_thrones.png',
        'star wars' => 'star_wars.png',
        'star craft' => 'star_craft.png',
        'star track' => 'star_track.png',
        'claymore' => 'claymore.png',
        'silent hill' => 'silent_hill.png',
        'the matrix' => 'the_matrix.png',
        'ghost in the shell' => 'ghost_in_the_shell.png',
    ];
    return $logos[$universe];
}

function getStatus()
{
    return json_decode(file_get_contents('status.json'), true);
}

function saveStatus($status)
{
    $json = json_encode($status);
    file_put_contents('status.json', $json);
}