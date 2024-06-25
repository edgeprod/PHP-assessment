<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '10/May/1989');
    echo "PDO MySQL extension is enabled and working.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
