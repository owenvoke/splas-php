<?php

namespace pxgamer\Splas;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    private $splasInstance;

    public function setUp()
    {
        $this->splasInstance = new Splas();
    }

    public function testCanBeInitialised()
    {
        $this->assertInstanceOf(Splas::class, $this->splasInstance);
    }

    public function testCanGetPhotos()
    {
        $photos = $this->splasInstance->getPhotos();
        $this->assertInternalType('array', $photos);
    }

    public function testCanGetCuratedPhotos()
    {
        $photos = $this->splasInstance->getCuratedPhotos();
        $this->assertInternalType('array', $photos);
    }

    public function testCanGetRandomPhotos()
    {
        $photos = $this->splasInstance->getRandom();
        $this->assertInternalType('array', $photos);
    }

    public function testCanGetPhotoById()
    {
        $photo = $this->splasInstance->getPhoto('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    public function testCanGetStatsById()
    {
        $photo = $this->splasInstance->getStats('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    public function testCanGetLinkById()
    {
        $photo = $this->splasInstance->getLink('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }
}
