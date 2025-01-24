<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    // Pastikan untuk menambahkan properti `incrementing` dan `keyType`
    public $incrementing = false;  // Menonaktifkan auto-increment untuk ID

    protected $keyType = 'string'; // Set key type menjadi string, karena UUID adalah string

    protected static function booted()
    {
        parent::booted();

        // Generate UUID saat model dibuat
        static::creating(function ($category) {
            if (! $category->getKey()) {
                $category->id = (string) Str::uuid();  // Generate UUID untuk id
            }
        });
    }

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
    ];
}
