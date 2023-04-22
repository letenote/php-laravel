@extends('layout.public')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <h5 class="card-title text-center mt-5 fw-light fs-5">SIGN IN</h5>
                    <div class="card-body p-4 p-sm-5">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    Remember password
                                </label>
                            </div>
                            <div class="d-grid mt-5">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                                    Sign in
                                </button>
                            </div>
                            <hr class="my-4">
                            <div class="text-center mt-2 fw-light">
                                Not a member ?
                                <a href="{{ url('register') }}">
                                    Signup
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
