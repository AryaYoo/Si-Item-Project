<header class="py-2 p-1 border-bottom" style="background-color: #213655;">
    <div class="container">
        <div class="container-fluid d-grid gap-3 align-items-center justify-content-between"
            style="grid-template-columns: 1fr 2fr;">
            <a href="{{ url('/') }}"
                class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img src="{{Vite::asset('resources/images/Logo-SiBarang.png')}}" class="bi me-2" width="70" height="70">
            </a>
            <div class="text-end">
                    <a href="{{ url('login') }}" class="btn btn-warning btn-style me-2">LOGIN</a>
                    <a href="{{ url('register') }}" class="btn btn-primary btn-style me-2">REGISTER</a>
            </div>
        </div>
    </div>
</header>
