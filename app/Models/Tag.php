<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'text'
    ];

    public static function findOrCreate(string $text): Tag
    {
        $tag = Tag::where('text', '=', $text)->get()->first();
        if (!$tag instanceof Tag) {
            $tag = Tag::create([
                'text' => $text
            ]);
        }
        return $tag;
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }

    public function __toString()
    {
        return $this->text;
    }
}
