@extends('layouts.login')

@section('login')
    <a href="/" class="btn btn-link m-4">Back</a>
    <div class="login-form-bg h-100 mt-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body p-5">
                                <div class="text-center">
                                    <h4>LOGIN ADMIN</h4>
                                </div>

                                <form action="{{ route('proses-login') }}" method="POST" class="mt-5 mb-5 login-input">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                                        {{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg"
                                            placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control form-control-lg"
                                            placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 p-3">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer text-center"><a href="page-register.html"
                                        class="text-primary">Lupa
                                        Password?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
