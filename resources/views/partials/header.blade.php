<header>
    <nav class="navbar navbar-expand-lg  bg-primary ">
        <div class="container">
            <h1><a class="navbar-brand text-white fs-3" href="#">EdiBlog</a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  bolder">
                        <a class="nav-link  text-white {{ $title == 'HOME' ? 'fw-bold' : '' }} bloder"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  text-white {{ $title == 'ABOUT' ? 'fw-bold' : '' }}"
                            href="/about">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  text-white {{ $title == 'BLOG' ? 'fw-bold' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  text-white {{ $title == 'CATEGORIES' ? 'fw-bold' : '' }}"
                            href="/categories">Categories</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
