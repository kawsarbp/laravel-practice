@extends('admin.inc.layouts')
@section('title')
    View
@endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-md-3">
            <table class="table table table-hover table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $category->name }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
