# Как установить PHP Composer без SSH

## Копирование
1. Загружаем содержимое папки [www](www) в корень сайта.
2. Загружаем папку [backend](backend) на порядок выше корня сайта (Если другое место, то в [installComposer.php](www/installComposer.php) и [updateComposer..php](www/updateComposer..php) поменяйте путь к папке backend).

## Настройки
1. Настроить файл [composer.json](backend/composer/composer.json) (Прописать пакеты (require) которые надо подключить через ",")

## Установка Composer
1. Запустить php файл в брауезере [installComposer.php](www/installComposer.php)

## Обновление Composer
1. Запустить php файл в брауезере [updateComposer..php](www/updateComposer..php)