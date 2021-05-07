<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $videos = Video::all();
        $tags = Tag::all();
        return view('welcome', compact('posts', 'videos', 'tags'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'type'  => 'required|in:POST,VIDEO'
        ]);

        if ($request->get('type') === 'POST') {
            /* @var Post $model */
            $model = Post::create([
                'title' => $request->get('title')
            ]);
        } else {
            /* @var Video $model */
            $model = Video::create([
                'title' => $request->get('title')
            ]);
        }

        $tags = collect(explode(' ', $request->get('tags')));

        $tags->each(function ($tag) use ($model) {
            $tag = Tag::findOrCreate($tag);

            $model->tags()->attach($tag);
        });

        return response()->redirectToRoute('index');
    }
}
