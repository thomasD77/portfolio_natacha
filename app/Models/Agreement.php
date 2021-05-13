<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file'
    ];

    protected $uploads = '/';
    public function getFileAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
