<nav class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="">
                <img src="./static/logo.svg" width="110" height="32" alt="<?= APP_NAME ?>" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 with-avatar p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)">PK</span>
                    <div class="d-none d-xl-block ps-2">
                        <div>Paweł Kuna</div>
                        <div class="mt-1 small text-secondary">UI Designer</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Status</a>
                    <a href="" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">Settings</a>
                    <a href="" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar w-100">
            <div class="container-xl">
                <div class="row m-0 g-0 justify-content-between w-100">
                    <ul class="navbar-nav col-md-auto col-12">
                        <li class="nav-item active">
                            <a class="nav-link nav-link-icon" href="<?= base_url() ?>">
                                <i class="ti ti-home"></i>
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="<?= base_url('banners/all') ?>">
                                <i class="ti ti-photo"></i>
                                <span class="nav-link-title">
                                    Banners
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="<?= base_url() ?>">
                                <i class="ti ti-photo"></i>
                                <span class="nav-link-title">
                                    Galleries
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="<?= base_url() ?>">
                                <i class="ti ti-file-type-pdf"></i>
                                <span class="nav-link-title">
                                    Documents
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last col-auto">
                        <form action="./" method="get" autocomplete="off" novalidate="">
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="ti ti-search"></i>
                                </span>
                                <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
