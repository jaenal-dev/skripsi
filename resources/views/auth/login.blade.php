@extends('layouts.guest')

@section('auth')
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <h1 class="fs-4 text-center fw-bold mb-4">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="mb-2 text-muted" for="nip">NIP</label>
                    <div class="input-group input-group-join mb-3">
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" value="{{ old('nip') }}" autofocus>
                        <span class="input-group-text rounded-end">&nbsp<i class="fa fa-id-card"></i>&nbsp</span>
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="mb-2 w-100">
                        <label class="text-muted" for="password">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="float-end">
                                <small>Forgot Password?</small>
                            </a>
                        @endif
                    </div>
                    <div class="input-group input-group-join mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        <span class="input-group-text rounded-end password cursor-pointer">&nbsp<i class="fa fa-eye"></i>&nbsp</span>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="form-check">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary ms-auto">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer py-3 border-0">
            <div class="text-center">
                Don't have an account yet? <a href="{{ route('register') }}" class="text-dark">Create an account</a>
            </div>
        </div>
    </div>
@endsection
