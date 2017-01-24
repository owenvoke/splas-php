# splas-php

A simple PHP wrapper for utilising the [Unsplash](https://unsplash.com) api.

## Usage

__Include the class:__
- Using Composer  
`composer require pxgamer/splas-php`  
```php
<?php
require 'vendor/autoload.php';
$splas = new \pxgamer\splas('APP_ID');
```
- Including the file manually  
```php
<?php
include 'src/splas.php';
$splas = new \pxgamer\splas('APP_ID');
```

Functions             | Parameters | Returns
--------------------- | ---------- | -------
getPhotos()           | void       | array
getCuratedPhotos()    | void       | array
getRandom()           | void       | array
getPhoto($id)         | string     | array
getStats($id)         | string     | array
getLink($id)          | string     | array