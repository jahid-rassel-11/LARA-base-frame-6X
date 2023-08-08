<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <?php /*    <script src="{{ asset('js/app.js') }}" defer></script>  */  ?>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('pageTitle')</title>
</head>

<body>

  <div class="container py-4">
    @include("common.nav")

    <div class="px-5 mb-4 bg-body-tertiary rounded-3">

        <div class="container-fluid py-3">
            @yield("content")
        </div>

        <div class="container-fluid py-3">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="container-fluid py-3">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include("common.footer")
  </div>

</body>
</html>
