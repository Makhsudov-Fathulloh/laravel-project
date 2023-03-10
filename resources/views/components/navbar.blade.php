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
        @auth


            <a href=" {{ route('notifications.index') }} " class="btn btn-primary mr-3">
                <i class="fa fa-bell"></i>
                <span class="badge badge-light"> {{ auth()->user()->unreadNotifications()->count() }} </span>
                <span class="sr-only">unread messages</span>
            </a>

            <div>
                {{ auth()->user()->name }}
            </div>

            <a href="{{ route('posts.create') }}" class="btn btn-primary mr-3 d-none d-lg-block">Add POST</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger mr-3 d-none d-lg-block">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary mr-3 d-none d-lg-block">KIrish</a>
        @endauth
    </div>
</nav>
