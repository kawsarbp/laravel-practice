@extends('admin.inc.layouts')
@section('title')
    Create Post
@endsection
@section('content')
    <div class="row justify-content-center">

        <div class="col-md-6">
            <h4 class="my-3">Add Post</h4>
            @if(session()->has('message'))
                <div class="alert alert-{{ session('type') }}">{{ session('message') }}</div>
            @endif
            <div class="card">
                <h6 class="card-header">Add new Category</h6>
                <form action="{{ route('admin.post.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="my-3">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Post Title" value="{{ old('title') }}">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="my-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control" id="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="my-3">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="description">description</label>
                            <textarea name="description" id="description" class="form-control" cols="10" rows="5"></textarea>
                        </div>

                        <div class="my-3">
                            <label>Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="active" value="active">
                                <label class="form-check-label" for="active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive">
                                <label class="form-check-label" for="inactive">Inactive</label>
                            </div>
                            <br>
                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

