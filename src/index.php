<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MONGO DB & PHP</title>
        <meta charset="utf-8">
        <?php # Added in order to prevent NGROK triggering 'GET /favicon.ico' ?>
        <link rel="icon" href="data:,">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 

            require_once __DIR__ . '/vendor/autoload.php';
            
            $db = (new MongoDB\Client('mongodb://myuser:docker@172.19.0.1:27017'))->mydb;
            
            $randArray = [
                [
                    'v1' => 1,
                ],
                [
                    'v1' => 1,
                    'v2' => 2,
                ],
                [
                    'v1' => 1,
                    'v2' => 2,
                    'v3' => 3,
                ],
                [
                    'v1' => 1,
                    'v2' => 2,
                    'v3' => 3,
                    'v4' => 4,
                ],
                [
                    'v1' => 1,
                    'v2' => 2,
                    'v3' => 3,
                    'v4' => 4,
                    'v5' => 5,
                ],
                [
                    'v1' => 1,
                    'v2' => 2,
                    'v3' => 3,
                    'v4' => 4,
                    'v5' => 5,
                    'v6' => 6,
                ],
                [
                    'v1' => 1,
                    'v2' => 2,
                    'v3' => 3,
                    'v4' => 4,
                    'v5' => 5,
                    'v6' => 6,
                    'v7' => 7,
                ],
            ];
            
            $insertArr = [
                'username' => 'FX-' . rand(1, 999),
                'email' => 'fadil@xcoder.dvlpr',
                'date_created' => date('Y/m/d H:i:s'),
            ];

            
            $combineArray = $insertArr + $randArray[rand(1,6)];
            
            $usersCollection = $db->users;
            
            $insertOneResult = $usersCollection->insertOne([$combineArray]);
        
            var_dump($insertOneResult->getInsertedId());
        ?>
    </body>
</html>

