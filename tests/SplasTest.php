<?php

namespace pxgamer\Splas;

use PHPUnit\Framework\TestCase;

class SplasTest extends TestCase
{
    private const TEST_PHOTO_ID = 'VGOiY1gZZYg';

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
        $this->assertIsArray($photos);
    }

    /** @test */
    public function itCanGetCuratedPhotos(): void
    {
        $photos = $this->splasInstance->getCuratedPhotos();
        $this->assertIsArray($photos);
    }

    /** @test */
    public function itCanGetRandomPhotos(): void
    {
        $photos = $this->splasInstance->getRandom();
        $this->assertIsArray($photos);
    }

    /** @test */
    public function itCanGetPhotoById(): void
    {
        $photo = $this->splasInstance->getPhoto(self::TEST_PHOTO_ID);
        $this->assertIsArray($photo);
    }

    /** @test */
    public function itCanGetStatsById(): void
    {
        $photo = $this->splasInstance->getStats(self::TEST_PHOTO_ID);
        $this->assertIsArray($photo);
    }

    /** @test */
    public function itCanGetLinkById(): void
    {
        $photo = $this->splasInstance->getLink(self::TEST_PHOTO_ID);
        $this->assertIsArray($photo);
    }
}
