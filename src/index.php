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
            
            // var_dump($combineArray);
            
            // $insertOneResult = $usersCollection->insertOne($combineArray);
            
            $data = $usersCollection->find([]);
            
            foreach($data as $_d):
                // var_dump($_d);
            endforeach;
            
            $some = $usersCollection->find(
                [
                    'v3' => 3,
                ]
            );
            
            // var_dump($some);
            
            foreach($some as $_d):
                // var_dump($_d->username);
                // var_dump($_d['username']);
            endforeach;
            
            $insertManyResult = $usersCollection->insertMany([
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
            
            // $insertOneResult = $usersCollection->insertOne(['_id' => 1, 'name' => 'Alice']);
            
        ?>
    </body>
</html>

