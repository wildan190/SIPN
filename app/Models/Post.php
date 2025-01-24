<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // Menonaktifkan auto-increment untuk ID dan memastikan key type adalah string
    public $incrementing = false;
    protected $keyType = 'string';

    // Generate UUID secara otomatis saat model dibuat
    protected static function booted()
    {
        parent::booted();

        static::creating(function ($post) {
            if (!$post->getKey()) {
                $post->id = (string) Str::uuid();
            }
        });
    }

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'headline',
        'category_id',
        'content',
        'slug',
        'status',
        'picture_upload',
    ];

    // Relasi dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Accessor untuk slug
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
