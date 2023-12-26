<?php

namespace JW\Countries\Test;

use JW\Countries\Countries;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CountriesTest extends TestCase
{
    private ?Countries $countries;

    protected function setUp(): void
    {
        $this->countries = new Countries();
    }

    #[Test]
    public function checkIfHas723Countries(): void
    {
        $expected = 139;
        $this->assertCount($expected, $this->countries->getAll(), "Hasn't $expected providers");
    }

    #[Test]
    public function checkIfTheIsoAreUnique(): void
    {
        $expected = 139;

        $countries = $this->countries->getAll();

        $isoCodes = [];
        foreach ($countries as $index => $country) {
            if (!in_array($country->iso, $isoCodes)) {
                $isoCodes[] = $country->iso;
            }
        }

        $this->assertCount($expected, $isoCodes, "Hasn't $expected providers");
    }

    #[Test]
    public function checkIfTheCodesAreUnique(): void
    {
        $expected = 139;

        $countries = $this->countries->getAll();

        $isoCodes = [];
        foreach ($countries as $index => $country) {
            if (!in_array($country->code, $isoCodes)) {
                $isoCodes[] = $country->code;
            }
        }

        $this->assertCount($expected, $isoCodes, "Hasn't $expected providers");
    }
}
