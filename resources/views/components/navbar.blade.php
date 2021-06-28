<?php $uri = $_SERVER['REQUEST_URI']; ?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="/"><i class="fab fa-amazon"></i> Couldbee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse form-inline" id="navbarSupportedContent">

            <!-- <div class=""> -->
                <form action="/search" class="input-group mx-5 my-0">
                    <input type="text" class="form-control" placeholder="Search something" aria-label="Search something" name="q">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                </form>
            <!-- </div> -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-store"></i> Store
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/my-store/products"><i class="fas fa-shopping-bag"></i> My Products</a></li>
                        <li><a class="dropdown-item" href="/my-store/sales"><i class="fas fa-clipboard-check"></i> Sales</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> {{Cookie::get('name')}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/my-account/balance"><i class="fas fa-money-check-alt"></i> Rp {{number_format(Cookie::get('balance'))}}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/my-account/orders"><i class="fas fa-shopping-bag"></i> Orders</a></li>
                        <li><a class="dropdown-item" href="/my-account/setting"><i class="fas fa-cog"></i> Setting</a></li>
                        <li><a class="dropdown-item" href="/auth/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>