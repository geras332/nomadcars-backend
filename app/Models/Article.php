<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'author_id',
        'title',
        'description',
        'thumbnail',
        'content',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getSlugAttribute(): string
    {
        $slug = $this->getAttribute('title') . ' ' . $this->getAttribute('id');

        return Str::slug($slug);
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $model = $this->resolveRouteBindingQuery($this, $value, $field)->first();

        if (!$model) {
            throw (new ModelNotFoundException)->setModel(static::class, $value);
        }

        return $model;
    }

    public function resolveRouteBindingQuery($query, $value, $field = null): Model|Relation|Builder
    {
        [$id] = explode('-', $value);

        return $query->where($field ?? $this->getRouteKeyName(), $id);
    }
}
