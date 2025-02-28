<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($alumni) {
            if (! $alumni->getKey()) {
                $alumni->id = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'almamater',
        'picture_upload',
    ];

    // // Menambahkan pengaturan untuk pengunggahan gambar
    // public function setPictureUploadAttribute($value)
    // {
    //     if (is_file($value)) {
    //         // Jika ada gambar baru yang diupload, simpan gambar tersebut
    //         $path = $value->store('alumni_pictures', 'public'); // Simpan gambar di folder alumni_pictures
    //         $this->attributes['picture_upload'] = $path; // Simpan path gambar di database
    //     }
    // }

    // // Custom accessor untuk mendapatkan URL gambar
    // public function getPictureUploadUrlAttribute()
    // {
    //     return $this->picture_upload ? Storage::url($this->picture_upload) : null;
    // }

    // // Untuk format tanggal (opsional jika ada kolom tanggal yang ingin diformat)
    // // protected $dates = ['created_at', 'updated_at'];
}
