@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create New Item</h3>
        </div>
        <form method="post" action="{{ route('store') }}">
            <div class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Title</label>
                    <input id="titleInput" class="form-control" type="text" name="title" value="{{ old('title') }}"
                           placeholder="Enter a funky title" required>
                </div>
                <div class="mb-3">
                    <label for="typeSelect" class="form-label">Object Type</label>
                    <select class="form-control" name="type" id="typeSelect">
                        <option disabled selected>Select Option</option>
                        <option value="POST">Post</option>
                        <option value="VIDEO">Video</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Space Separated Tags</label>
                    <input id="tags" name="tags" value="{{ old('tags') }}" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
