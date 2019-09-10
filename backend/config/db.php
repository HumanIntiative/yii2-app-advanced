<?php return [
    'class' => 'yii\db\Connection',
    'dsn' => sprintf(
        'pgsql:host=%s;port=%s;dbname=%s',
        getenv('DBCORE_HOST'),
        getenv('DBCORE_PORT'),
        getenv('DBCORE_NAME')
    ),
    'username' => getenv('DBCORE_USER'),
    'password' => getenv('DBCORE_PASS'),
    'charset' => 'utf8',
    'attributes' => [\PDO::ATTR_EMULATE_PREPARES => true],
    // 'queryCacheDuration' => getenv('CACHE_DURATION'),
    // 'schemaCacheDuration' => getenv('CACHE_DURATION'),
];