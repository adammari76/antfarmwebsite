<header>
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container py-2">
            <a class="navbar-brand d-flex align-items-center gap-2" href="/" aria-label="Antfarm Tech Solutions Home">
                <span class="brand-orb" aria-hidden="true"></span>
                <span class="brand-text">Antfarm <span>Tech Solutions</span></span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 mt-3 mt-lg-0">
                    <li class="nav-item"><a class="nav-link <?php echo $page_slug === 'home' ? 'active' : ''; ?>" <?php echo $page_slug === 'home' ? 'aria-current="page"' : ''; ?> href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page_slug === 'about' ? 'active' : ''; ?>" <?php echo $page_slug === 'about' ? 'aria-current="page"' : ''; ?> href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page_slug === 'services' ? 'active' : ''; ?>" <?php echo $page_slug === 'services' ? 'aria-current="page"' : ''; ?> href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page_slug === 'pricing' ? 'active' : ''; ?>" <?php echo $page_slug === 'pricing' ? 'aria-current="page"' : ''; ?> href="/pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page_slug === 'portfolio' ? 'active' : ''; ?>" <?php echo $page_slug === 'portfolio' ? 'aria-current="page"' : ''; ?> href="/portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo $page_slug === 'contact' ? 'active' : ''; ?>" <?php echo $page_slug === 'contact' ? 'aria-current="page"' : ''; ?> href="/contact">Contact</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-premium btn-sm px-4" href="/contact">Request Proposal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
