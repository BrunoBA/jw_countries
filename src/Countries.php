<?php

namespace JW\Countries;

class Countries
{

    public array $countries = [];

    public function __construct()
    {
        $this->init();
    }

    private function init(): void
    {
        $countries = loadCountries();
        foreach ($countries as $country) {
            $this->countries[] = new Country(
                $country->flag,
                $country->code,
                $country->name,
                $country->iso,
            );
        }
    }

    public function getByCode(string $code): ?Country
    {
        $countries = $this->countries;

        foreach ($countries as $country) {
            if ($country->code == $code) {
                return $country;
            }
        }

        return null;
    }

    public function getByIso(string $iso): ?Country
    {
        $countries = $this->countries;

        foreach ($countries as $country) {
            if ($country->iso == $iso) {
                return $country;
            }
        }

        return null;
    }

    /**
     * @return Country[]|array
     */
    public function getAll(): array
    {
        return array_merge($this->countries, []);
    }

    private function defaultLocale(): Country
    {
        return new Country(
            flag: "🇺🇸",
            code: "en_US",
            name: "United States",
            iso: "US"
        );
    }
}
