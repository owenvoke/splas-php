<?php
use pxgamer\splas;

class MainTest extends PHPUnit_Framework_TestCase
{

    public function testCanBeInitialised()
    {
        $splasPhp = new splas();
        $this->assertInstanceOf(splas::class, $splasPhp);
    }

    public function testCanGetPhotos()
    {
        $splasPhp = new splas();
        $photos = $splasPhp->getPhotos();
        $data = is_array(json_decode($photos, true));
        $this->assertTrue($data);
    }

    public function testCanGetCuratedPhotos()
    {
        $splasPhp = new splas();
        $photos = $splasPhp->getCuratedPhotos();
        $data = is_array(json_decode($photos, true));
        $this->assertTrue($data);
    }

    public function testCanGetRandomPhotos()
    {
        $splasPhp = new splas();
        $photos = $splasPhp->getRandom();
        $data = is_array(json_decode($photos, true));
        $this->assertTrue($data);
    }

    public function testCanGetPhotoById()
    {
        $splasPhp = new splas();
        $photo = $splasPhp->getPhoto('VGOiY1gZZYg');
        $data = is_array(json_decode($photo, true));
        $this->assertTrue($data);
    }

    public function testCanGetStatsById()
    {
        $splasPhp = new splas();
        $photo = $splasPhp->getStats('VGOiY1gZZYg');
        $data = is_array(json_decode($photo, true));
        $this->assertTrue($data);
    }

    public function testCanGetLinkById()
    {
        $splasPhp = new splas();
        $photo = $splasPhp->getLink('VGOiY1gZZYg');
        $data = is_array(json_decode($photo, true));
        $this->assertTrue($data);
    }

}
