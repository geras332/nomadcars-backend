<?php

namespace App\Services\Sitemap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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

    public function generateSitemap(): void
    {
        $sitemap = Sitemap::create();

        foreach ($this->getRoutesWithModelParams() as $uri => $params) {
            if ($params) {
                $modelInstances = $this->getModelInstances($params);
                foreach ($modelInstances as $models) {
                    foreach ($models as $model) {
                        $sitemap->add(
                            Url::create($this->generateUrl($uri, $model))
                                ->setLastModificationDate($this->getLastModificationDate($model))
                                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                                ->setPriority(0.8)
                        );
                    }
                }
            }
            else {
                $sitemap->add(
                    Url::create($uri)
                        ->setLastModificationDate($this->getLastModificationDate())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                        ->setPriority(0.5)
                );
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }

    private function generateUrl(string $uri, Model $model): string
    {
        preg_match_all('/\{([^}]+)}/', $uri, $matches);

        foreach ($matches[1] as $match) {
            $value = data_get($model, $match);
            if ($value) {
                $uri = str_replace("{{$match}}", $value, $uri);
            }
            else {
                if ($model && method_exists($model, 'getKey')) {
                    $uri = str_replace("{{$match}}", $model->getKey(), $uri);
                }
            }
        }

        return $uri;
    }

    private function getModelInstances(array $params): array
    {
        $instances = [];

        foreach ($params as $param => $modelClass) {
            if (class_exists($modelClass)) {
                $modelClass::chunk(100, function ($models) use (&$instances, $param) {
                    $instances[$param] = array_merge($instances[$param] ?? [], $models->all());
                });
            }
        }

        return $instances;
    }

    private function getRoutesWithModelParams(): array
    {
        $urls = [];
        foreach (Route::getRoutes() as $route) {
            if ($this->shouldSkipRoute($route->uri())) {
                continue;
            }

            if (in_array('GET', $route->methods())) {
                $uri = $route->uri();
                $params = [];

                foreach ($route->parameterNames() as $param) {
                    $model = $this->getModelForRouteParameter($param);
                    if ($model) {
                        $params[$param] = $model;
                    }
                }

                $urls[$uri] = $params;
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
        $modelClass = $this->modelNamespaces . '\\' . ucfirst(Str::singular($param));
        if (class_exists($modelClass)) {
            return $modelClass;
        }

        return null;
    }

    private function getLastModificationDate(?Model $model = null): Carbon
    {
        return $model ? $model->getAttribute('updated_at') : Carbon::yesterday();
    }
}
