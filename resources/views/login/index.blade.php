@extends('layouts/main')

@section('container-main')
    <div class="form-login row justify-content-center mb-5">
        <div class="col col-10 col-md-6 ">
            <div class="w-100 m-auto">

                @if (session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form>
                    <h1 class="h2 font-weight-bolder text-center my-4">Please Login</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">
                        Sign in
                    </button>
                    <small class="d-block text-center mt-3">Not Registered?
                        <a href="/register">Register Now!</a>
                    </small>
                </form>
            </div>
        </div>
    </div>
@endsection
