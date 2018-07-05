<?php

namespace pxgamer\Splas;

/**
 * Class Splas.
 */
class Splas
{
    const API_BASE_URI = 'https://api.unsplash.com/';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * Splas constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey = '')
    {
        $this->setApiKey($apiKey);
    }

    /**
     * Get an associative array of photos.
     *
     * @return array|null
     */
    public function getPhotos()
    {
        return $this->get('photos');
    }

    /**
     * Get an associative array of curated photos.
     *
     * @return array|null
     */
    public function getCuratedPhotos()
    {
        return $this->get('photos/curated');
    }

    /**
     * Get a random photo as an array from the API.
     *
     * @return array|null
     */
    public function getRandom()
    {
        return $this->get('photos/random');
    }

    /**
     * Get a photo by ID.
     *
     * @param null|string $imageId
     *
     * @return array|null
     */
    public function getPhoto($imageId = null)
    {
        return ($imageId !== null) ? $this->get('photos/'.$imageId) : null;
    }

    /**
     * Get a specific photo's statistics.
     *
     * @param null|string $imageId
     *
     * @return array|null
     */
    public function getStats($imageId = null)
    {
        return ($imageId !== null) ? $this->get('photos/'.$imageId.'/stats') : null;
    }

    /**
     * Get an array containing the direct link for a photo (useful for downloading an image).
     *
     * @param null|string $imageId
     *
     * @return array|null
     */
    public function getLink($imageId = null)
    {
        return ($imageId !== null) ? $this->get('photos/'.$imageId.'/download') : null;
    }

    /**
     * Get the response from the API.
     *
     * @param string $endpoint
     *
     * @return mixed
     */
    private function get(string $endpoint)
    {
        $url = self::API_BASE_URI.$endpoint.((strpos(
            $endpoint,
            '?'
        ) > 0) ? '&client_id=' : '?client_id=').$this->apiKey;
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

    /**
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
}
