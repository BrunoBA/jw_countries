<?php

namespace JW\Countries;

class Country implements \JsonSerializable
{
    public function __construct(
        private ?string $flag,
        private ?string $code,
        private ?string $name,
        private ?string $iso,
    ) {
    }

    public function getLang(): string
    {
        return explode("_", $this->code)[0];
    }

    public function getCountryCode(): string
    {
        return explode("_", $this->code)[1];
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
