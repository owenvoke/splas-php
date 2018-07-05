<?php

namespace pxgamer\Splas;

use GuzzleHttp\Client;

/**
 * Class Splas.
 */
class Splas
{
    const API_BASE_URI = 'https://api.unsplash.com/';

    /**
     * @var Client
     */
    private $client;
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * Splas constructor.
     *
     * @param string $apiKey
     * @return void
     */
    public function __construct(string $apiKey = '')
    {
        $this->client = new Client([
            'base_uri' => self::API_BASE_URI,
        ]);

        $this->setApiKey($apiKey);
    }

    /**
     * Get an associative array of photos.
     *
     * @return array
     */
    public function getPhotos(): array
    {
        return $this->get('photos');
    }

    /**
     * Get an associative array of curated photos.
     *
     * @return array
     */
    public function getCuratedPhotos(): array
    {
        return $this->get('photos/curated');
    }

    /**
     * Get a random photo as an array from the API.
     *
     * @return array
     */
    public function getRandom(): array
    {
        return $this->get('photos/random');
    }

    /**
     * Get a photo by ID.
     *
     * @param string $imageId
     * @return array
     */
    public function getPhoto(string $imageId): array
    {
        return $this->get('photos/'.$imageId);
    }

    /**
     * Get a specific photo's statistics.
     *
     * @param string $imageId
     * @return array
     */
    public function getStats(string $imageId): array
    {
        return $this->get('photos/'.$imageId.'/stats');
    }

    /**
     * Get an array containing the direct link for a photo (useful for downloading an image).
     *
     * @param string $imageId
     * @return array
     */
    public function getLink(string $imageId): array
    {
        return $this->get('photos/'.$imageId.'/download');
    }

    /**
     * Get the response from the API.
     *
     * @param string $endpoint
     * @return mixed
     */
    private function get(string $endpoint): array
    {
        return \GuzzleHttp\json_decode(
            $this->client
                ->get(
                    self::API_BASE_URI.$endpoint,
                    [
                        'query' => [
                            'client_id' => $this->apiKey,
                        ],
                    ]
                )
                ->getBody()
                ->getContents(),
            true
        );
    }

    /**
     * @param string $apiKey
     * @return void
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
}
