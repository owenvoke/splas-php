<?php

use pxgamer\Splas\Splas;

class MainTest extends \PHPUnit\Framework\TestCase
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
        $data = is_array($photos);
        $this->assertTrue($data);
    }

    public function testCanGetCuratedPhotos()
    {
        $splasPhp = new Splas();
        $photos = $splasPhp->getCuratedPhotos();
        $data = is_array($photos);
        $this->assertTrue($data);
    }

    public function testCanGetRandomPhotos()
    {
        $splasPhp = new Splas();
        $photos = $splasPhp->getRandom();
        $data = is_array($photos);
        $this->assertTrue($data);
    }

    public function testCanGetPhotoById()
    {
        $splasPhp = new Splas();
        $photo = $splasPhp->getPhoto('VGOiY1gZZYg');
        $data = is_array($photo);
        $this->assertTrue($data);
    }

    public function testCanGetStatsById()
    {
        $splasPhp = new Splas();
        $photo = $splasPhp->getStats('VGOiY1gZZYg');
        $data = is_array($photo);
        $this->assertTrue($data);
    }

    public function testCanGetLinkById()
    {
        $splasPhp = new Splas();
        $photo = $splasPhp->getLink('VGOiY1gZZYg');
        $data = is_array($photo);
        $this->assertTrue($data);
    }
}
