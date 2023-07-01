<?php

namespace app;

class UrlParameterReplacer
{
    private string $url;
    private array $parameters;

    public function __construct($url)
    {
        $this->url = $url;
        $this->parameters = [];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }
}
