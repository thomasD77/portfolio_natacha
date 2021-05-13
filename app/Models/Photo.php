<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'small',
        'custom',
    ];

    protected $uploads = '/';
    public function getFileAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
