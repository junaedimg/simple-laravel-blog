@extends('layouts/main')

@section('container-main')
    <div class="form-register row justify-content-center mb-5">
        <div class="col col-10 col-md-6 ">
            <div class="w-100 m-auto">
                <form method="post" action="/register">
                    @csrf
                    <h1 class="h2 font-weight-bolder text-center my-4">Registration Form</h1>
                    <div class="form-floating">
                        <input name="name" type="name"
                            class="form-control @if ($errors->has('name')) is-invalid @elseif(old('name') !== null) is-valid @endif"
                            placeholder="Name" value="{{ old('name') }}" />
                        <label for="floatingInput">Name</label>
                        @error('name')
                            <div class="invalid-tooltip position-static">{{ $message }}</div>
                        @else
                            <div class="valid-tooltip position-static">Valid</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="username" type="username"
                            class="form-control @if ($errors->has('username')) is-invalid @elseif(old('username') !== null) is-valid @endif"
                            placeholder="Username" value="{{ old('username') }}" />
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-tooltip position-static">{{ $message }}</div>
                        @else
                            <div class="valid-tooltip position-static">Valid</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="email" type="email"
                            class="form-control @if ($errors->has('email')) is-invalid @elseif(old('email') !== null) is-valid @endif"
                            placeholder="Email Address" value="{{ old('email') }}" />
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-tooltip position-static">{{ $message }}</div>
                        @else
                            <div class="valid-tooltip position-static">Valid</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password"
                            class="form-control @if ($errors->has('password')) is-invalid @elseif(old('password') !== null) is-valid @endif"
                            placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-tooltip position-static">{{ $message }}</div>
                        @else
                            <div class="valid-tooltip position-static">Valid</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">
                        Sign in
                    </button>
                    <small class="d-block text-center mt-3">
                        Already Resgistered?
                        <a href="/login">Login</a>
                    </small>
                </form>
            </div>
        </div>
    </div>
@endsection
