@extends('layouts.login')

@section('login')
    <a href="/" class="btn btn-primary m-4">Back</a>
    <div class="row justify-content-center mb-5">
        <div class="card  shadow border-0" style="width: 38rem;">
            <div class="card-body p-5">
                <div class="text-center">
                    <h2><b>LOGIN ADMIN</b></h2>
                </div>

                <form action="{{ route('proses-login') }}" method="POST" class="mt-5 mb-5 login-input">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><i class="fa-solid fa-triangle-exclamation"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 p-3">Sign In</button>
                </form>
                <p class="mt-5 login-form__footer text-center"><a href="page-register.html" class="text-primary">Lupa
                        Password?</a></p>
            </div>
        </div>
    </div>
@endsection
