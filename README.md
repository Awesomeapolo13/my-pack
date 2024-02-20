# Библиотека для создания случайного текста

## Требования

- PHP 8.2

## Установка

```shell
composer require a-logachev/my-pkg
```

## Использование

```php
<?php

$textGenerator = new TextGenerator();
echo $textGenerator->createText(4)
```
