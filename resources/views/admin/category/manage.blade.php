@extends('admin.inc.layouts')
@section('title')
    Manage Category
@endsection
@section('content')
    <h4 class="my-3">Manage Category</h4>
    @if(session()->has('message'))
        <div class="alert alert-{{ session('type') }}">{{ session('message') }}</div>
    @endif
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Sl No</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ ucwords($category->status) }}</td>
                <td>

                    <a href="{{ route('admin.category.show',$category->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $categories->links() }}
@endsection

