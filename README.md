# splas-php

A simple PHP wrapper for utilising the [Unsplash](https://unsplash.com) api.

## Usage

__Include the class:__
- Using Composer  
`composer require pxgamer/splas-php`  
```php
<?php
require 'vendor/autoload.php';
use pxgamer\Splas\Splas;

$splas = new Splas('APP_ID');
```
- Including the file manually  
```php
<?php
include 'src/Splas.php';
use pxgamer\Splas\Splas;

$splas = new Splas('APP_ID');
```

Functions             | Parameters | Returns
--------------------- | ---------- | -------
getPhotos()           | void       | array/null
getCuratedPhotos()    | void       | array/null
getRandom()           | void       | array/null
getPhoto($id)         | string     | array/null
getStats($id)         | string     | array/null
getLink($id)          | string     | array/null
