@extends('layout.public')
@section('title', $title)
@section('content')
<div class="custom-login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" value="true">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="mt-4 text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>

                <p class="mb-0">
                    Not a member ?
                    <a href="{{ url('register') }}" class="text-center">Register here</a>
                </p>
            </div>
        </div>
    </div>
</div>
@if(isset($error))
    <script type="text/javascript">
        toastr.error("{{$error}}");
    </script>
@endif
@endsection
