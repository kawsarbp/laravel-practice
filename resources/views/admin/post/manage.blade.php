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
            <th>Slug</th>
            <th>Photo</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td><a href="{{ $post->slug }}" target="_blank">Click Here</a></td>
                <td><img src="{{ $post->photo }}" alt="" style="width: 60px;" ></td>
                <td>{{ ucwords($post->status) }}</td>
                <td>

                    <a href="{{ route('admin.post.show',$post->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.category.edit',$post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.post.destroy',$post->id) }}" method="POST">
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

