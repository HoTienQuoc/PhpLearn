<?php
$DB_HOST = 'db';
$DB_USER = 'root';
$DB_PASS = 'pass';
$DB_DATABASE = 'beginningPHP';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
$query = "SELECT * FROM users";
$result = $mysqli->query($query);
if ($result) {
    echo '<h1>Users in Database</h1>';
    while ($row = $result->fetch_assoc()) {
        echo "Name: {$row['first_name']} {$row['last_name']} = Created: {$row['created']} </br>";
    }
} 
else {
    echo "No Results. Have you run <a href='http://localhost/chapter7/seedDB.php'>SeedDB</a>?";
}
