# Описание

Тестовый пакетик, никому не нужный и одинокий в этом большом и страшном интЫрнете

## Требования

php 8.3

## Установка 

composer require surok/composer-package

## Пример использования

use Surok\ComposerPackage\App\Calculator;

$calculator = new Calculator();
$result = $calculator->sum(3, 4);
echo $result . PHP_EOL;