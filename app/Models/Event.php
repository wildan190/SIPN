<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    // Pastikan untuk menambahkan properti `incrementing` dan `keyType`
    public $incrementing = false;  // Menonaktifkan auto-increment untuk ID
    protected $keyType = 'string'; // Set key type menjadi string, karena UUID adalah string

    protected static function booted()
    {
        parent::booted();

        // Generate UUID saat model dibuat
        static::creating(function ($event) {
            if (!$event->getKey()) {
                $event->id = (string) Str::uuid();  // Generate UUID untuk id
            }
        });
    }

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'headline',
        'event_name',
        'location',
        'date',
        'time',
        'event_description',
        'picture_upload', // Kolom untuk gambar
    ];

    // Format tanggal yang lebih mudah dibaca (Opsional)
    protected $dates = ['date'];

    // Custom accessors untuk format waktu
    public function getDateAttribute($value)
    {
        return Carbon::parse($value); // Mengonversi string tanggal menjadi instance Carbon
    }


    public function getFormattedTimeAttribute()
    {
        return $this->time->format('H:i');
    }
}
