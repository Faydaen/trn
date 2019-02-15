<?php

// connect
include('connect.php');


//$персонаж = получить_персонажа_персонажа(1);
//dd($a);

$characters = получить_всех_персонажей();
//$characters = [];

//$characters[] = получить_персонажа(1);
//$characters[] = получить_персонажа(2);
//$characters[] = получить_персонажа(12);
$status = getStatus();
//dd($characters);

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


//dd($status);

//if ($status['battlefield'] == '') {
//    $status['battlefield'] = setButtlefield();
//    saveStatus($status);
//}
//
//if ($status['first_character'] == '') {
//    $status['first_character'] = setFirstChar();
//    saveStatus($status);
//
//}
//
//if ($status['second_character'] == '') {
//    $status['second_character'] = setFirstChar();
//    saveStatus($status);
//}
//
//if ($status['second_character'] != '') {
//    runCombat();
//    saveStatus($status);
//}
//
//$allCaracterts = getAllCaracters();
//$allButtles = = getAllBattles();


function фаза_подготовки()
{
}

function фаза_боя()
{
}

//-----

function getStatus()
{
    return json_decode(file_get_contents('status.json'), true);
}

function saveStatus($status)
{
    $json = json_encode($status);
    file_put_contents('status.json', $json);
}

function setButtlefield()
{
    $butelfields = [
        'город',
        'пустош',
        'замок',
        'лес',
        'станция',
    ];


}

function dd($entity)
{
    var_dump($entity);
    die();
}

?>


