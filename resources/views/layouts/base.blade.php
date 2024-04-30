<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Tambahkan link untuk Bootstrap Icons -->
    <link rel="stylesheet" href="/assets/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <title>TukuCoders</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 border-bottom fw-bold">
                ICCONIC</div>
                <div class="list-group">
                    <a href="{{ route('index') }}" class="list-group-item list-group-item-action second-text">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                    @if (auth()->user()->role === 'admin')
                    <a href="{{ route('kasir.index') }}" class="list-group-item list-group-item-action second-text">
                        <i class="bi bi-wallet2 me-2"></i>
                        Kasir
                    </a>
                    <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action second-text">
                        <i class="bi bi-cup me-2"></i>
                        Minuman
                    </a>
                    @endif
                    <a href="{{ route('pelanggan.index') }}" class="list-group-item list-group-item-action second-text">
                        <i class="bi bi-people me-2"></i>
                        Pelanggan
                    </a>
                    <a href="{{ route('transaksi.index') }}" class="list-group-item list-group-item-action second-text">
                        <i class="bi bi-cash me-2"></i>
                        Transaksi
                    </a>
                    @if (auth()->user()->role === 'admin')
                    <a href="{{ route('laporan') }}" class="list-group-item list-group-item-action second-text">
                        <i class="bi bi-book me-2"></i>
                        Laporan
                    </a>
                    @endif
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action text-danger"><i class="bi bi-power me-2"></i>Logout</button>
                    </form>
                </div>
                
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-grid-fill third-text fs-4 me-3" id="menu-toggle"></i>
                </div> 
            </nav>
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
