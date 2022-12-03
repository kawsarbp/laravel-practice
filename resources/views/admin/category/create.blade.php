@extends('admin.inc.layouts')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="row justify-content-center">

        <div class="col-md-6">
            <h4 class="my-3">Add Category</h4>
            @if(session()->has('message'))
                <div class="alert alert-{{ session('type') }}">{{ session('message') }}</div>
            @endif
            <div class="card">
                <h6 class="card-header">Add new Category</h6>
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="my-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name" value="{{ old('name') }}">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
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

