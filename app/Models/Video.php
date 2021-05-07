<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Taggable;

class Video extends Model
{
    use HasFactory, Taggable;

    protected $fillable = [
        'title'
    ];

    public function __toString()
    {
        return $this->title;
    }
}
