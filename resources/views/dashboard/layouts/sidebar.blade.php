<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                <i class="bi bi-house-door"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/posts') ? 'active' : ''}}" href="/dashboard/posts">
                <i class="bi bi-file-earmark-text"></i>
                    Kelola Postingan
                </a>
            </li>
        </ul>
    </div>
</nav>
