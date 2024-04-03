<header>
    <nav class="navbar navbar-expand-lg bg-primary navbar-light py-3">
        <div class="container">
            <h1><a class="navbar-brand text-white fs-3" href="#">EdiBlog</a></h1>
            <button class="custom-toggler navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  bolder">
                        <a class="nav-link  text-white {{ $active == 'HOME' ? 'fw-bold' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link F text-white {{ $active == 'ABOUT' ? 'fw-bold' : '' }}"
                            href="/about">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  text-white {{ $active == 'BLOG' ? 'fw-bold' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  text-white {{ $active == 'CATEGORIES' ? 'fw-bold' : '' }}"
                            href="/categories">Categories</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="GET" action="/blog">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
