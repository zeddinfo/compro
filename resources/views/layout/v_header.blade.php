<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center justify-content-end">
                <h1 class="logo mr-auto"><a href="index.html">Hidayah Travel</a></h1>


                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="/about">About</a></li>
                        <li class="{{ request()->is('route') ? 'active' : '' }}"><a href="/route">Route</a></li>
                        <li class="{{ request()->is('pemesanan') ? 'active' : '' }}"><a href="/pemesanan">Pemesanan</a></li>

                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </div>
    </div>
</header><!-- End Header -->