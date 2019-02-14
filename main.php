<?php

// connect
include ('connect.php');



$status = getStatus();

if ($status['battlefield'] == ''){
    $status['battlefield'] = setButtlefield();
    saveStatus($status);
}

if ($status['first_character'] == ''){
    $status['first_character'] = setFirstChar();
    saveStatus($status);

}

if ($status['second_character'] == ''){
    $status['second_character'] = setFirstChar();
    saveStatus($status);
}

if ($status['second_character'] != ''){
    runCombat();
    saveStatus($status);
}

$allCaracterts = getAllCaracters();
$allButtles = = getAllBattles();


//-----

function getStatus(){
    return json_decode(file_get_contents('status.json'),true)
}

function saveStatus($status)
{
    $json = json_encode($status);
    file_put_contents('status.json',$json);
}

function setButtlefield(){
    $butelfields = [
        'город',
        'пустош',
        'замок',
        'лес',
    'станция',
    ];


}