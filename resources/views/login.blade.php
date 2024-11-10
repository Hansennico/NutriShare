@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container"><br>
    <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center"><b>NutriShare</b><br></h3>
        <hr>
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
        @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
            <hr>
            <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p>
        </form>
    </div>
</div>
@stop

@endsection
