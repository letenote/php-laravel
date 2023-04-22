@extends('layout.public')
@section('title', $title)
@section('content')
<div class="login-page">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="/register" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="full_name" type="text" class="form-control" placeholder="Full name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="retype_password" type="password" class="form-control" placeholder="Retype password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>

                <p class="mb-0 mt-3">
                    Have already an account ?
                    <a href="{{ url('login') }}" class="text-center">Login here</a>
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
@if(isset($success))
    <script type="text/javascript">
        toastr.success("{{$success}}");
        setTimeout(() => (window.location.href = "/login"),3000);
    </script>
@endif
@endsection
