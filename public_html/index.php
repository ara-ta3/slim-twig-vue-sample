<?php

require '../vendor/autoload.php';

// 初期化・設定

$app = new \Slim\Slim();

$app->config(array(
    'templates.path' => '../views',
    'debug' => false,
));

// エラーハンドリング

$app->notFound(function () use ($app) {
    echo 404;
});

$app->error(function (\Exception $e) use ($app) {
    echo 500;
});

// ルーティング

$app->get('/', function () {
    echo "Hello world";
});

// 実行

$app->run();
