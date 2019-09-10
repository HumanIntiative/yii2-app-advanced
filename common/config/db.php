<?php return [
    'class' => 'yii\db\Connection',
    'dsn' => sprintf(
        'mysql:host=%s;dbname=%s',
        getenv('DB_HOST'),
        getenv('DB_NAME')
    ),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'charset' => 'utf8',
    'attributes' => [\PDO::ATTR_EMULATE_PREPARES => true],
    // 'queryCacheDuration' => getenv('CACHE_DURATION'),
    // 'schemaCacheDuration' => getenv('CACHE_DURATION'),
];