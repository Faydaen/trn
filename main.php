<?php

// connect
include('connect.php');

$battles = получить_все_битвы();
//dd($battles);
$aliveCount = получить_количество_живых_персонажей();
$allCount = получить_количество_всех_персонажей();

$characters = [];
//$characters = получить_двух_случайный_персонажей();

$фаза = фаза();

if ($фаза == 'подготовка') {
    $characters = получить_двух_случайный_персонажей();
    записать_персонажей_в_статус($characters);
}


if ($фаза == 'бой') {
    $characters = получить_двух_персонажей_из_статуса();
    бой($characters[0], $characters[1]);
}

if (фаза() == 'диалог') {
    очистить_статус();
}


function бой($char1, $char2)
{


    $p1 = $char1['power'];
    $p2 = $char2['power'];

// ---
    $get = false;
    $rand = 0;
    while (!$get) {
        $rand = rand(-$p1 * 10000, $p2 * 10000) / 10000;
        if ($rand != 0) {
            $get = true;
        }
    }
// ---
    if ($rand < 0) {
        // победил первый
        $p1 = $p1 + abs($rand);
        $p2 = -abs($rand);

    } else {
        // победил второй
        $p1 = -abs($rand);
        $p2 = $p2 + abs($rand);
    }

    записать_результат_боя($char1, $char2, $rand);

    обновить_силу_игрока($char1['id'], $p1);
    обновить_силу_игрока($char2['id'], $p2);

    перейти_в_фазу_диалога();
//--
}


function получить_все_битвы()
{
    $query = 'SELECT * FROM battles';
    $connection = соединение();
    $result = pg_query($connection, $query);

    $battles = [];

    while ($row = pg_fetch_assoc($result)) {
        $first = получить_персонажа($row['first']);
        $second = получить_персонажа($row['second']);
        $row['first'] = $first;
        $row['second'] = $second;
        $battles[] = $row;
    }
    return $battles;
}

function записать_результат_боя($char1, $char2, $rand)
{
    if ($rand < 0) {
        $winnerId = $char1['id'];
    } else {
        $winnerId = $char2['id'];
    }

    $query = <<<SQL
  INSERT INTO battles (first, first_power, second, second_power, winner, damage)
  VALUES ({$char1['id']}, {$char1['power']}, {$char2['id']}, {$char2['power']}, $winnerId, $rand)
SQL;

    $connection = соединение();
    pg_query($connection, $query);
}

function обновить_силу_игрока($id, $power)
{
    $query = 'UPDATE characters SET power = ' . $power . ' WHERE id = ' . $id;
    $connection = соединение();
    pg_query($connection, $query);
}


function получить_двух_случайный_персонажей()
{
    $characters = [];
    $allCharacters = получить_всех_живых_персонажей();
    if (count($allCharacters) == 1) {
        if ($allCharacters[0]['sex'] == 'm') {
            echo "Победил " . $allCharacters[0]['name'];
        } else {
            echo "Победила " . $allCharacters[0]['name'];
        }

        die();
    }
    $index = array_rand($allCharacters, 2);
    $characters[] = $allCharacters[$index[0]];
    $characters[] = $allCharacters[$index[1]];
    return $characters;
}

function получить_двух_персонажей_из_статуса()
{
    $characters = [];
    $status = getStatus();

    $characters[] = получить_персонажа($status['first_character']);
    $characters[] = получить_персонажа($status['second_character']);
    return $characters;
}


function очистить_статус()
{
    $status = [
        'dialog' => '',
        'first_character' => '',
        'second_character' => '',
    ];
    saveStatus($status);
}

function перейти_в_фазу_диалога()
{
    $status = [
        'dialog' => 'true',
    ];
    saveStatus($status);
}

function записать_персонажей_в_статус($characters)
{
    $status = [
        'dialog' => '',
        'first_character' => $characters[0]['id'],
        'second_character' => $characters[1]['id'],
    ];
    saveStatus($status);
}

function получить_количество_всех_персонажей()
{
    $query = 'SELECT count(*) as c FROM characters';
    $connection = соединение();
    $result = pg_query($connection, $query);
    return pg_fetch_assoc($result)['c'];
}

function получить_количество_живых_персонажей()
{
    $query = 'SELECT count(*) as c FROM characters WHERE power>0';
    $connection = соединение();
    $result = pg_query($connection, $query);
    return pg_fetch_assoc($result)['c'];
}


function фаза()
{
    $status = getStatus();
    if ($status['dialog'] == '') {

        if (($status['first_character'] == '') && ($status['second_character'] == '')) {
            return 'подготовка';
        }

        if (($status['first_character'] != '') && ($status['second_character'] != '')) {
            return 'бой';
        }
    } else {
        return 'диалог';
    }

    return false;
}


function получить_всех_персонажей()
{
    $query = 'SELECT * FROM characters';
    $connection = соединение();
    $result = pg_query($connection, $query);

    $chars = [];

    while ($row = pg_fetch_assoc($result)) {
        $chars[] = $row;
    }
    return $chars;
}

function получить_всех_живых_персонажей()
{
    $query = 'SELECT * FROM characters where power>0';
    $connection = соединение();
    $result = pg_query($connection, $query);

    $chars = [];

    while ($row = pg_fetch_assoc($result)) {
        $chars[] = $row;
    }
    return $chars;
}

function получить_персонажа($id)
{
    $query = 'SELECT * FROM characters WHERE id=' . $id;
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


