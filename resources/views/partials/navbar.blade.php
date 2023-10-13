<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="./images/dc-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search comic..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Go</button>
                </form>
            </div>
        </div>
    </nav>
</div>
