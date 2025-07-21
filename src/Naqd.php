<?php

namespace Medo19\Naqd;

class Naqd
{
    protected array $currencies;

    public function __construct()
    {
        $this->currencies = json_decode(file_get_contents(__DIR__ . '/data/currencies.json'), true);
    }

    public function all(): array
    {
        return $this->currencies;
    }

    public function get(string $code): ?array
    {
        return $this->currencies[strtoupper($code)] ?? null;
    }

    public function getSvgPath(string $code): ?string
    {
        $code = strtoupper($code);
        return file_exists(__DIR__ . "/data/svg/{$code}.svg")
            ? __DIR__ . "/data/svg/{$code}.svg"
            : null;
    }

    public function getSvg(string $code): ?string
    {
        $path = $this->getSvgPath($code);
        return $path ? file_get_contents($path) : null;
    }
}
