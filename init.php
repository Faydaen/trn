<?php

$user='ghost';
$pass = 'qwerty';
$dbh = new PDO('mysql:host=localhost;dbname=tour', $user, $pass);




// $dbh->query('SELECT * FROM pres');
foreach($dbh->query('SELECT * from pres') as $row) {
        print_r($row);
}

// $connection->exec('INSERT INTO users VALUES (1, "somevalue"');