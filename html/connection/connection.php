<?php 
require __DIR__ . '/../../vendor/autoload.php'; 

// Connection ng MongoDB
$client = new MongoDB\Client; 
$collection = $client->Elder_Living->users; // Connect the mongodb, Database name "Elder_Living", collection is users

?>

