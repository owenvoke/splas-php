<?php

namespace pxgamer\Splas;

/**
 * Class Splas.
 */
class Splas
{
    /**
     * @var string
     */
    public static $api_base = 'https://api.unsplash.com/';

    /**
     * @var string
     */
    private static $app_id = '';

    /**
     * Splas constructor.
     *
     * @param string $app_id
     */
    public function __construct($app_id = '')
    {
        return ($app_id !== '') ? self::$app_id = $app_id : false;
    }

    /**
     * Get an associative array of photos.
     *
     * @return array|null
     */
    public function getPhotos()
    {
        return self::get('photos');
    }

    /**
     * Get an associative array of curated photos.
     *
     * @return array|null
     */
    public function getCuratedPhotos()
    {
        return self::get('photos/curated');
    }

    /**
     * Get a random photo as an array from the API.
     *
     * @return array|null
     */
    public function getRandom()
    {
        return self::get('photos/random');
    }

    /**
     * Get a photo by ID.
     *
     * @param null|string $id
     * @return array|null
     */
    public function getPhoto($id = null)
    {
        return ($id !== null) ? self::get('photos/'.$id) : null;
    }

    /**
     * Get a specific photo's statistics.
     *
     * @param null|string $id
     * @return array|null
     */
    public function getStats($id = null)
    {
        return ($id !== null) ? self::get('photos/'.$id.'/stats') : null;
    }

    /**
     * Get an array containing the direct link for a photo (useful for downloading an image).
     *
     * @param null|string $id
     * @return array|null
     */
    public function getLink($id = null)
    {
        return ($id !== null) ? self::get('photos/'.$id.'/download') : null;
    }

    /**
     * Get the response from the API.
     *
     * @param string $endpoint
     * @return mixed
     */
    private static function get($endpoint)
    {
        $url = self::$api_base.$endpoint.((strpos(
            $endpoint,
            '?'
        ) > 0) ? '&client_id=' : '?client_id=').self::$app_id;
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            [
                CURLOPT_URL            => $url,
                CURLOPT_RETURNTRANSFER => 1,
            ]
        );
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result, true);

        return $result;
    }
}
