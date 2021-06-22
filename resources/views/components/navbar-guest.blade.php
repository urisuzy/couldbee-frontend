<?php $uri = $_SERVER['REQUEST_URI']; ?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="/"><i class="fab fa-amazon"></i> Couldbee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse form-inline" id="navbarSupportedContent">
            <div class="input-group mx-5">
                <input type="text" class="form-control" placeholder="Search something" aria-label="Search something" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> User
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/auth/login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        <li><a class="dropdown-item" href="/auth/register"><i class="fas fa-user-plus"></i> Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>