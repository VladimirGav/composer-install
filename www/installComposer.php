<?php
/**
 * VladimirGav
 * GitHub Website: https://vladimirgav.github.io/
 * GitHub: https://github.com/VladimirGav
 * Copyright (c)
 */

// Задаем пути
$backend = __DIR__.'/../backend';
$dirComposer = $backend.'/composer'; // Папка должна содержать composer.json

// Устанавливаем Composer
require_once $backend .'/installComposer.php';
$installComposer = \installComposer::instance()->installComposerGo($dirComposer);
if(!empty($installComposer['error'])){
    echo '<pre>';
    print_r($installComposer);
    echo '</pre>';
    exit;
}

// Подключаем Composer
require_once $dirComposer .'/vendor/autoload.php';

// TODO Можно использовать Composer, все библиотеки и классы
\modules\mExample::instance()->showExampleText('VladimirGav все Ok, composer работает...');