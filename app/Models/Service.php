<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'title',
        'description',
    ];
    public function getDescriptionAttribute()
    {
        return $this->attributes['Description'];
    }
}
