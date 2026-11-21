@extends('layouts.app')

@section('title', 'Create Account')
@section('content')



<div class = "row justify-content-center">
    <div class = "col-md-6">
        <div class = "card shadow-sm"><div class ="card-body">
            <h3 class = "card-title text-center mb-4">Create Account</h3>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    @error('name')
                            <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    @error('email')
                            <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                            <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div></div>
    </div>
    @endsection



                