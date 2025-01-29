@extends('layout.mainLayout')
@section('title', 'Register')
@section('content')

@if (session('success'))
    <h5>{{session('success')}}</h5>
@elseif($errors->any())
    @foreach ($errors->all() as $error)
        <h5>{{$error}}</h5>
    @endforeach

@endif
<div class="container mt-3 d-flex align-items-center justify-content-center w-70 ">
    <div class="login">
        <h4 class="text-dark">
            Registration
        </h4>
        <form action="{{ route('registerAccount') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="formgroup col-6">
                    <i class="fa fa-user p-2"></i>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name">
                </div>
                <div class="formgroup col-6">
                    <i class="fa fa-user p-2"></i>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="formgroup">
                <i class="fa fa-birthday-cake"></i>
                <input type="date" id="birthday" name="birthday" placeholder="Birthday">
            </div>
            <div class="formgroup">
                <i class="fa fa-calendar"></i>
                <input type="number" id="age" name="age" placeholder="Age">
            </div>
            <div class="formgroup">
                <i class="fa fa-map-marker"></i>
                <input type="text" id="address" name="address" placeholder="Address">
            </div>
            <div class="formgroup">
                <i class="fa fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="formgroup">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="formgroup">
                <i class="fa fa-lock"></i>
                <input type="password" id="con-password" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <button type="submit">Register</button>

        </form>
        <p class="mt-2 text-dark">Already have account?<a href="{{route('login')}}">Login here</a></p>
    </div>
</div>
@endsection
