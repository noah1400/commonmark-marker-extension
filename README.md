# n0sz/commonmark-marker-extension
This library adds support of highlighted text (`<mark>` HTML tag) to [league/commonmark](https://github.com/thephpleague/commonmark)
# Installation
This project can be installed via composer:
```
composer require n0sz/commonmark-marker-extension
```
# Usage
```php
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use N0sz\CommonMark\Marker\MarkerExtension;


$environment->addExtension(new CommonMarkCoreExtension());
$environment->addExtension(new MarkerExtension());
```
# Syntax
Code:
```
==Marker== on the left

Marker on the ==right==

==Marker everywhere==
```
Result:
```html
<p><mark>Marker</mark> on the left</p>

<p>Marker on the <mark>right</mark></p>

<p><mark>Marker everywhere</mark></p>
```
