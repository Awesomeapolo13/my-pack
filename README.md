# Библиотека для создания случайного текста

## Требования

- PHP 7.4

## Установка

```shell
composer require a-logachev/my-pkg
```

## Использование

```php
<?php

use ALogachev\MyPkg\TextGenerator;

$textGenerator = new TextGenerator();
echo $textGenerator->createText(4)
```
