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

// Обновляем Composer
require_once $backend .'/installComposer.php';
$updateComposer = \installComposer::instance()->updateComposer($dirComposer);

// Выводим результат
echo '<pre>';
print_r($updateComposer);
echo '</pre>';