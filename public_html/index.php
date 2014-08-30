<?php

require '../vendor/autoload.php';

use Slim\Slim;

// 初期化・設定

$app = new \Slim\Slim();

$app->config(array(
    'view' => new \Slim\Views\Twig,
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

$app->get('/', function () use($app) {
    $app->render('index.html.twig');
});

// 実行

$app->run();
