@extends('layout.mainLayout')
@section('title', 'Login')
@section('content')


@if (session('success'))
    <div class="alert alert-success">
        <h5>{{ session('success') }}</h5>
    </div>
@elseif($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-error">
            <h5>{{ $error }}</h5>
        </div>
    @endforeach
@endif
<div class="container mt-3 d-flex align-items-center justify-content-center w-70 ">

    <div class="login  ">
        <h1>Login</h1>
        <form action="{{ route('loginAccount') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="formgroup">
                <i class="fa fa-user"></i>
                <input type="email" id="email" name="email" placeholder="Email:">
            </div>
            <div class="formgroup">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Password:" required>
            </div>
            <button type="submit" class="mt-4">Login</button>
        </form>
        <p class="mt-2 text-dark">Don't have account?<a href="{{route('register')}}">Register here</a></p>
    </div>

</div>
@endsection
