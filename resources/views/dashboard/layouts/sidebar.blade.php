<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-beetwen align-item-center px-3 mt-4 mb-1 text-muted">
            <span>Home page</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span data-feather="arrow-right"></span>
                    Home
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/about">
                    <span data-feather="arrow-right"></span>
                    About
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posting">
                    <span data-feather="arrow-right"></span>
                    Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories">
                    <span data-feather="arrow-right"></span>
                    Category
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-beetwen align-item-center px-3 mt-4 mb-1 text-muted">
            <span>Creator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : "" }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : "" }}" href="/dashboard/posts">
                    <span data-feather="file-text"></span>
                    My Posts
                </a>
            </li>
        </ul>
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-beetwen align-item-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/categories*') ? 'active' : "" }}" aria-current="page" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>
