<?php

namespace pxgamer;

class splas
{
    public static $api_base = 'https://api.unsplash.com/';

    private static $app_id = '';

    public function __construct($app_id = '')
    {
        return ($app_id !== '') ? self::$app_id = $app_id : false;
    }

    public function getPhotos()
    {
        return self::get('photos');
    }

    public function getCuratedPhotos()
    {
        return self::get('photos/curated');
    }

    public function getRandom()
    {
        return self::get('photos/random');
    }

    public function getPhoto($id = null)
    {
        return ($id !== null) ? self::get('photos/'.$id) : '';
    }

    public function getStats($id = null)
    {
        return ($id !== null) ? self::get('photos/'.$id.'/stats') : '';
    }

    public function getLink($id = null)
    {
        return ($id !== null) ? self::get('photos/'.$id.'/download') : '';
    }

    private static function get($endpoint)
    {
        $url = self::$api_base.$endpoint.((strpos($endpoint, '?') > 0) ? '&client_id=' : '?client_id=').self::$app_id;
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            [
                CURLOPT_URL => $url,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_RETURNTRANSFER => 1,
            ]
        );
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result, true);

        return $result;
    }
}
