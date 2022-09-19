<div class="row justify-content-sm-center h-100 align-items-center">
    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
        <div class="card shadow-lg">
            <div class="card-body p-4">
                <h1 class="fs-4 text-center fw-bold mb-4">@yield('name')</h1>

                {{ $slot }}

            </div>
            <div class="card-footer py-3 border-0">
                <div class="text-center">
                    Don't have an account yet? <a href="{{ route('register') }}" class="text-dark">Create an
                        account</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 text-muted">
            Copyright &copy; 2022
        </div>
    </div>
</div>
