<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Klean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/" class="nav-item nav-link active">Bosh sahifa</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">Biz haqimizda</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Xizmatlar</a>
            <a href="{{ route('projects') }}" class="nav-item nav-link">Project</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ route('posts.index') }}" class="dropdown-item">Latest Blog</a>
                    <a href="{{ route('single') }}" class="dropdown-item">Blog Detail</a>
                </div>
            </div>

            <a href="{{ route('contacts') }}" class="nav-item nav-link">Al'oqa</a>
        </div>
        <a href="#" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>
    </div>
</nav>
