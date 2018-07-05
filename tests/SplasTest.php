<?php

namespace pxgamer\Splas;

use PHPUnit\Framework\TestCase;

/**
 * Class SplasTest
 */
class SplasTest extends TestCase
{
    /**
     * Testing key for unit tests.
     */
    private const TEST_KEY = '397172750322145e4ccc8077eff2f628979e8ffa03fa51524d53629e7178d910';

    /**
     * @var Splas
     */
    private $splasInstance;

    /**
     * Initialise the test class.
     */
    public function setUp()
    {
        $this->splasInstance = new Splas(self::TEST_KEY);
    }

    /**
     * Check that the Splas instance is initialised.
     */
    public function testCanBeInitialised()
    {
        $this->assertInstanceOf(Splas::class, $this->splasInstance);
    }

    /**
     * Check that the standard getPhotos() method works.
     */
    public function testCanGetPhotos()
    {
        $photos = $this->splasInstance->getPhotos();
        $this->assertInternalType('array', $photos);
    }

    /**
     * Check that the getCuratedPhotos() method works.
     */
    public function testCanGetCuratedPhotos()
    {
        $photos = $this->splasInstance->getCuratedPhotos();
        $this->assertInternalType('array', $photos);
    }

    /**
     * Check that the getRandom() method works.
     */
    public function testCanGetRandomPhotos()
    {
        $photos = $this->splasInstance->getRandom();
        $this->assertInternalType('array', $photos);
    }

    /**
     * Check that the getPhoto() method works.
     */
    public function testCanGetPhotoById()
    {
        $photo = $this->splasInstance->getPhoto('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    /**
     * Check that the getStats() method works.
     */
    public function testCanGetStatsById()
    {
        $photo = $this->splasInstance->getStats('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    /**
     * Check that the getLink() method works.
     */
    public function testCanGetLinkById()
    {
        $photo = $this->splasInstance->getLink('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }
}
