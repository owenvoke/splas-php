<?php

namespace pxgamer\Splas;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testCanBeInitialised()
    {
        $splasPhp = new Splas();
        $this->assertInstanceOf(Splas::class, $splasPhp);
    }

    public function testCanGetPhotos()
    {
        $splasPhp = new Splas();
        $photos = $splasPhp->getPhotos();
        $this->assertInternalType('array', $photos);
    }

    public function testCanGetCuratedPhotos()
    {
        $splasPhp = new Splas();
        $photos = $splasPhp->getCuratedPhotos();
        $this->assertInternalType('array', $photos);
    }

    public function testCanGetRandomPhotos()
    {
        $splasPhp = new Splas();
        $photos = $splasPhp->getRandom();
        $this->assertInternalType('array', $photos);
    }

    public function testCanGetPhotoById()
    {
        $splasPhp = new Splas();
        $photo = $splasPhp->getPhoto('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    public function testCanGetStatsById()
    {
        $splasPhp = new Splas();
        $photo = $splasPhp->getStats('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    public function testCanGetLinkById()
    {
        $splasPhp = new Splas();
        $photo = $splasPhp->getLink('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }
}
