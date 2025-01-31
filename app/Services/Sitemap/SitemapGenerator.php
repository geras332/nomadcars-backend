<?php

namespace App\Services\Sitemap;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class SitemapGenerator
{
    private string $modelNamespaces;
    private array $ignorePrefixes;
    private int $maxUrls;

    public function __construct(string $modelNamespaces = 'App\Models', array $ignorePrefixes = ['admin'], int $maxUrls = 10000)
    {
        $this->modelNamespaces = $modelNamespaces;
        $this->ignorePrefixes = $ignorePrefixes;
        $this->maxUrls = $maxUrls;
    }

    public function getRoutesWithModelParams(): array
    {
        $urls = [];
        foreach (Route::getRoutes() as $route) {
            if ($this->shouldSkipRoute($route->uri())) {
                continue;
            }

            if (in_array('GET', $route->methods())) {
                $uri = $route->uri();
                $params = Arr::map($route->parameterNames(), function ($value) {
                    return $this->getModelForRouteParameter($value);
                });

                if (array_filter($params)) {
                    $urls[$uri] = $params;
                }
                else {
                    $urls[$uri] = null;
                }
            }
        }

        return array_slice($urls, 0, $this->maxUrls);
    }

    private function shouldSkipRoute(string $uri): bool
    {
        foreach ($this->ignorePrefixes as $prefix) {
            if (str_starts_with(trim($uri, '/'), $prefix)) {
                return true;
            }
        }

        return false;
    }

    private function getModelForRouteParameter(string $param): ?string
    {
        $param = $this->modelNamespaces . '\\' . ucfirst($param);
        if (class_exists($param)) {
            return $param;
        }

        return null;
    }
}
