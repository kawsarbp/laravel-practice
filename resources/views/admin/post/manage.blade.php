@extends('admin.inc.layouts')
@section('title')
    Manage Post
@endsection
@section('content')
    <h4 class="my-3">Manage Category</h4>
    @if(session()->has('message'))
        <div class="alert alert-{{ session('type') }}">{{ session('message') }}</div>
    @endif
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Sl No</th>
            <th>Post Title</th>
            <th>Category Name</th>
            <th>Slug</th>
            <th>Photo</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($posts as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->category->name }}</td>
            <td>{{ $data->slug }}</td>
            <td><img src="{{ $data->photo }}" alt="" style="width: 100px;" ></td>
            <td>{{ $data->status }}</td>
            <td>

                <a href="{{ route('admin.post.show',$data->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('admin.category.edit',$data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin.post.destroy',$data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $posts->links() }}

@endsection


