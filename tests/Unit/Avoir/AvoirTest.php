<?php

namespace App\Tests\Unit\Avoir;

use PHPUnit\Framework\TestCase;
use App\Entity\Avoir;

class AvoirTest extends TestCase
{
    private Avoir $avoir;

    protected function setUp() :void
    {
        parent::setUp();

        $this->avoir = new Avoir;
    }

    public function testGetMttTotalTtc(): void
    {
        $value = "135556";

        $response = $this->avoir->setMttTotalTtc($value);

        self::assertInstanceOf(Avoir::class, $response);
        self::assertEquals($value, $this->avoir->getMttTotalTtc());
    }
    public function testGetMttTotalHt(): void
    {
        $value = "13320";

        $response = $this->avoir->setMttTotalHt($value);

        self::assertInstanceOf(Avoir::class, $response);
        self::assertEquals($value, $this->avoir->getMttTotalHt());
    }
}
