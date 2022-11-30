@extends('frontend.inc.layouts')
@section('title')
    User Registration
@endsection

@section('content')
    <div class="card">
        <h3 class="card-header">User Registration Form</h3>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-{{ session('type') }}">{{ session('message') }}</div>
            @endif
            <form action="{{ route('user.registration') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name"
                           class="form-control @error('name') is-invalid  @enderror ">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email"
                           class="form-control @error('email') is-invalid  @enderror ">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="photo">Profile Photo</label>
                    <input type="file" id="photo" name="photo" class="form-control @error('photo') is-invalid  @enderror ">
                    @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password"
                           class="form-control @error('password') is-invalid  @enderror">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="password_confirmation" placeholder="Enter Your Confirm Password"
                           class="form-control">
                </div>
                <div class="mb-3 text-end">
                    <button class="btn btn-primary btn-sm">Registration</button>
                </div>
            </form>
        </div>
    </div>
@endsection
