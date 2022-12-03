@extends('admin.inc.layouts')
@section('title')
    View
@endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-md-6">
            <table class="table table table-hover table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $post->description }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
