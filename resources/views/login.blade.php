@extends('app')
@section('title', 'Sign In')

@section('auth')
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ url('login') }}" class="h1"><b>Sign In</b></a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ url('proseslogin') }}" method="post">
                @method('POST')
                @csrf
                <div class="input-group mb-3">
                    <input type="email"name="email" class="form-control @error('email') is-invalid @enderror" required
                        placeholder="Email anda">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" required placeholder="Password"
                        id="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                    <small class="text-danger ">{{ $message }}</small>
                @enderror
                <div class="row post clearfix">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" onclick="myFunction()">
                            <label for="remember">
                                Show Password
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
                <div class="post cleafix">
                    <a href="{{ url('register') }}" class="text-center">Create an Account</a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
