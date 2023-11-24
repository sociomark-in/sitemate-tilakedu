<nav class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications" aria-expanded="false">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <i class="ti ti-bell"></i>
                    <span class="badge bg-red"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Last updates</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 1</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Change deprecated html tags to text decoration classes (#29604)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <i class="ti ti-star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 2</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            justify-content:between ⇒ justify-content:space-between (#29734)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions show">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <i class="ti ti-star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 3</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Update change-version.js (#29736)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <i class="ti ti-star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Example 4</a>
                                        <div class="d-block text-secondary text-truncate mt-n1">
                                            Regenerate package-lock.json (#29730)
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <i class="ti ti-star"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <a href="./profile.html" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="./settings.html" class="dropdown-item">Settings</a>
                    <a href="./sign-in.html" class="dropdown-item">Logout</a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-icon dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                                <i class="ti ti-star d-md-none d-lg-inline-block"></i>
                                <span class="nav-link-title">
                                    Extra
                                </span>
                            </a>
                            <div class="dropdown-menu" data-bs-popper="static">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./empty.html">
                                            Empty page
                                        </a>
                                        <a class="dropdown-item" href="./cookie-banner.html">
                                            Cookie banner
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./chat.html">
                                            Chat
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./activity.html">
                                            Activity
                                        </a>
                                        <a class="dropdown-item" href="./gallery.html">
                                            Gallery
                                        </a>
                                        <a class="dropdown-item" href="./invoice.html">
                                            Invoice
                                        </a>
                                        <a class="dropdown-item" href="./search-results.html">
                                            Search results
                                        </a>
                                        <a class="dropdown-item" href="./pricing.html">
                                            Pricing cards
                                        </a>
                                        <a class="dropdown-item" href="./pricing-table.html">
                                            Pricing table
                                        </a>
                                        <a class="dropdown-item" href="./faq.html">
                                            FAQ
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./users.html">
                                            Users
                                        </a>
                                        <a class="dropdown-item" href="./license.html">
                                            License
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item" href="./logs.html">
                                            Logs
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./music.html">
                                            Music
                                        </a>
                                        <a class="dropdown-item" href="./photogrid.html">
                                            Photogrid
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./tasks.html">
                                            Tasks
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./uptime.html">
                                            Uptime monitor
                                        </a>
                                        <a class="dropdown-item" href="./widgets.html">
                                            Widgets
                                        </a>
                                        <a class="dropdown-item" href="./wizard.html">
                                            Wizard
                                        </a>
                                        <a class="dropdown-item" href="./settings.html">
                                            Settings
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./trial-ended.html">
                                            Trial ended
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./job-listing.html">
                                            Job listing
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a class="dropdown-item" href="./page-loader.html">
                                            Page loader
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
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