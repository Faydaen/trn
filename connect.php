<?php

$dbname='postgres';
$host='localhost';
$port='22223';
$user='postgres';
$password='qwerty';

$db_connection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$db_connection) {
    echo "Произошла ошибка\n";
    exit;
}
else {
    echo "Успешно подключено\n";
}

$query = 'SELECT * FROM characters';

$result = pg_query($db_connection, $query);

while ($row = pg_fetch_assoc($result)) {
//    echo "Автор: $row[0]  E-mail: $row[1]";
    print_r($row);
    echo "<br />\n";
}



//// $dbh->query('SELECT * FROM pres');
//foreach($dbh->query('SELECT * from pers') as $row) {
//        print_r($row);
//}
//
//die('dd');

// $connection->exec('INSERT INTO users VALUES (1, "somevalue"');