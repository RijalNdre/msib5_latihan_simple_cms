<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="file-text"></span>
                    Preview Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('berita') ? 'active' : ''}}" href="/berita">
                    <span data-feather="file-plus"></span>
                    Upload Berita
                </a>
            </li>
        </ul>
    </div>
</nav>