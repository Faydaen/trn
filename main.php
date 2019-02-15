<?php

// connect
include('connect.php');


$aliveCount = получить_количество_живых_персонажей();
$allCount = получить_количество_всех_персонажей();

$characters = [];
$characters = получить_двух_случайный_персонажей();

if (фаза() == 'подготовка'){
    $characters = получить_двух_случайный_персонажей();
    записать_персонажей_в_статус($characters);
}


//
if (фаза() == 'бой'){
    $characters = получить_двух_персонажей_из_статуса();
//    dd($characters);
//    $результат_боя = бой($characters[0], $characters[1]);
//    записать_результат_боя($результат_боя);
}
//
//if (фаза() == 'диалог') {
//     // todo
//}

function получить_двух_случайный_персонажей() {
    $characters = [];
    $allCharacters = получить_всех_персонажей();
    $index = array_rand($allCharacters, 2);
    $characters[] = $allCharacters[$index[0]];
    $characters[] = $allCharacters[$index[1]];
    return $characters;
}

function получить_двух_персонажей_из_статуса(){
    $characters = [];
    $status = getStatus();

    $characters[] = получить_персонажа($status['first_character']);
    $characters[] = получить_персонажа($status['second_character']);
    return $characters;
}



function записать_персонажей_в_статус($characters){
    $status = [
        'first_character'=>$characters[0]['id'],
        'second_character'=>$characters[1]['id'],
    ];
    saveStatus($status);
}

function получить_количество_всех_персонажей(){
    $query = 'SELECT count(*) as c FROM characters';
    $connection = соединение();
    $result = pg_query($connection, $query);
    return pg_fetch_assoc($result)['c'];
}

function получить_количество_живых_персонажей(){
    $query = 'SELECT count(*) as c FROM characters WHERE power>0';
    $connection = соединение();
    $result = pg_query($connection, $query);
    return pg_fetch_assoc($result)['c'];
}




function фаза()
{
    $status = getStatus();
    if (($status['first_character'] == '') && ($status['second_character'] == '')){
        return 'подготовка';
    }

    if (($status['first_character'] != '') && ($status['second_character'] != '')){
        return 'бой';
    }

    return false;
}


function получить_всех_персонажей(){
    $query = 'SELECT * FROM characters';
    $connection = соединение();
    $result = pg_query($connection, $query);

    $chars = [];

    while ($row = pg_fetch_assoc($result)) {
        $chars[] = $row;
    }
    return $chars;
}

function получить_персонажа($id){
    $query = 'SELECT * FROM characters WHERE id='.$id;
    $connection = соединение();
    $result = pg_query($connection, $query);
    return pg_fetch_assoc($result);
}





//function setButtlefield()
//{
//    $butelfields = [
//        'город',
//        'пустош',
//        'замок',
//        'лес',
//        'станция',
//    ];
//
//
//}



?>


