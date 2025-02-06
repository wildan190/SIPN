<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($post) {
            if (! $post->getKey()) {
                $post->id = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'headline',
        'category_id',
        'content',
        'slug',
        'status',
        'picture_upload',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
