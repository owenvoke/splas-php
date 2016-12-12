# splas-php

A simple PHP wrapper for utilising the [Unsplash](https://unsplash.com) api.

## Usage

__Include the class:__
- Using Composer  
`composer require pxgamer/splas-php`  
```php
<?php
require 'vendor/autoload.php';
$devRant = new \pxgamer\splas('APP_ID');
```
- Including the file manually  
```php
<?php
include 'src/devRant.php';
$devRant = new \pxgamer\splas('APP_ID');
```

Functions             | Parameters | Returns
--------------------- | ---------- | -------
getPhotos()           | void       | string (json)
getCuratedPhotos()    | void       | string (json)
getRandom()           | void       | string (json)
getPhoto($id)         | string     | string (json)
getStats($id)         | string     | string (json)
getLink($id)          | string     | string (json)