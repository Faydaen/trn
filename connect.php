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



function получить_двух_случайный_персонажей(){

}
