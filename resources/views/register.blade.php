@extends('layout.public')
@section('title', 'Register')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <h5 class="card-title text-center mt-5 fw-light fs-5">REGISTER</h5>
                    <div class="card-body p-4 p-sm-5">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputFullName">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputFullName" placeholder="Enter full name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRepeatPassword">Repeat Password</label>
                                <input type="password" class="form-control" id="exampleInputRepeatPassword" placeholder="Repeat Password">
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    I agree all statements in Terms of service
                                </label>
                            </div>
                            <div class="d-grid mt-5">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                                    Register
                                </button>
                            </div>
                            <hr class="my-4">
                            <div class="text-center mt-2 fw-light">
                                Have already an account? ?
                                <a href="{{ url('login') }}">
                                    Login here
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
