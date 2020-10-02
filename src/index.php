<?php 

    require_once __DIR__ . '/vendor/autoload.php';
    
    $collection = (new MongoDB\Client('mongodb://myuser:docker@172.19.0.1:27017'))->mydb;
    
    $collection = $collection->users;

    $insertManyResult = $collection->insertMany([
        [
            'username' => 'admin',
            'email' => 'admin@example.com',
            'name' => 'Admin User',
        ],
        [
            'username' => 'test',
            'email' => 'test@example.com',
            'name' => 'Test User',
        ],
    ]);
    
    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
    
    var_dump($insertManyResult->getInsertedIds());
    echo '<hr>';
    var_dump($collection);
    
    $document = $collection->findOne(['username' => 'admin']);
    echo '<hr>';
    var_dump($document);

    
?>

