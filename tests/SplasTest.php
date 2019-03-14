<?php

namespace pxgamer\Splas;

use PHPUnit\Framework\TestCase;

class SplasTest extends TestCase
{
    /** @var Splas */
    private $splasInstance;

    public function setUp(): void
    {
        $this->splasInstance = new Splas(getenv('UNSPLASH_API_KEY'));
    }

    /** @test */
    public function itCanBeInitialised(): void
    {
        $this->assertInstanceOf(Splas::class, $this->splasInstance);
    }

    /** @test */
    public function itCanGetPhotos(): void
    {
        $photos = $this->splasInstance->getPhotos();
        $this->assertInternalType('array', $photos);
    }

    /** @test */
    public function itCanGetCuratedPhotos(): void
    {
        $photos = $this->splasInstance->getCuratedPhotos();
        $this->assertInternalType('array', $photos);
    }

    /** @test */
    public function itCanGetRandomPhotos(): void
    {
        $photos = $this->splasInstance->getRandom();
        $this->assertInternalType('array', $photos);
    }

    /** @test */
    public function itCanGetPhotoById(): void
    {
        $photo = $this->splasInstance->getPhoto('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    /** @test */
    public function itCanGetStatsById(): void
    {
        $photo = $this->splasInstance->getStats('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }

    /** @test */
    public function itCanGetLinkById(): void
    {
        $photo = $this->splasInstance->getLink('VGOiY1gZZYg');
        $this->assertInternalType('array', $photo);
    }
}
