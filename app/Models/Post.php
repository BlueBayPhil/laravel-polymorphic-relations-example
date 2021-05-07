<?php

namespace App\Models;

use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
