<?php
$user='ghost';
$pass = 'qwerty';
$port="21113";
$dbname='tour';
$host='localhost';
die("mysql:host=$host;dbname=$dbname;port=$port");
$dbh = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);




// $dbh->query('SELECT * FROM pres');
foreach($dbh->query('SELECT * from pers') as $row) {
        print_r($row);
}

die('dd');

// $connection->exec('INSERT INTO users VALUES (1, "somevalue"');