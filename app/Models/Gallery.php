<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($gallery) {
            if (! $gallery->getKey()) {
                $gallery->id = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'headline',
        'description',
        'date',
        'picture_upload',
    ];

    protected $dates = ['date'];

    public function getDateAttribute($value)
    {
        return Carbon::parse($value);
    }
}
