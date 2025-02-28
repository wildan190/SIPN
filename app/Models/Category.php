<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($category) {
            if (! $category->getKey()) {
                $category->id = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'name',
        'description',
    ];
}
