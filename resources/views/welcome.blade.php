@extends('layouts.main')
@section('content')
    <div class="row mb-3 mt-3">
        <div class="col">
            <a href="{{ route('create') }}" class="btn btn-primary">Create Object</a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posts</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post }}</td>
                                <td class="text-right">
                                    @foreach($post->tags as $tag)
                                        <span class="badge badge-primary fs-6 p-2">{{ $tag }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Videos</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        @foreach($videos as $video)
                            <tr>
                                <td>{{ $video }}</td>
                                <td class="text-right">
                                    @foreach($video->tags as $tag)
                                        <span class="badge badge-primary fs-6 p-2">{{ $tag }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tags</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tag</th>
                            <th>Posts</th>
                            <th>Videos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag }}</td>
                                <td>{{ $tag->posts()->count() }}</td>
                                <td>{{ $tag->videos()->count() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
