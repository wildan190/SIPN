<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($event) {
            if (! $event->getKey()) {
                $event->id = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'headline',
        'event_name',
        'location',
        'date',
        'time',
        'event_description',
        'picture_upload',
    ];

    protected $dates = ['date'];

    public function getDateAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getFormattedTimeAttribute()
    {
        return $this->time->format('H:i');
    }
}
