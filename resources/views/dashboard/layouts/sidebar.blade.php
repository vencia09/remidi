<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <!-- sidebar -->
        <div class="offcanvas-body d-md-flex vh-100 flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('dashboard') ? 'active' : '' }} "
                        aria-current="page" href="/dashboard">
                        <i class="bi bi-sliders"></i>
                        Dashboard
                    </a>
                </li>
               
            </ul>

            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                <span>Master Data</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <svg class="bi">
                        <use xlink:href="#plus-circle" />
                    </svg>
                </a>
            </h6>
            <ul class="nav flex-column mb-auto">
                
                
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('dashboard/layanan-kami*') ? 'active' : '' }}" href="/dashboard/layanan-kami">
                        <i class="bi bi-clipboard"></i>
                        Portofolio
                    </a>
                
                
        
                    </a>
                
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('dashboard/sosmed*') ? 'active' : '' }}" href="/dashboard/sosmed">
                        <i class="bi bi-chat-dots"></i>
                        Sosial Media
                    </a>
                </li>
            </ul>

            <hr />

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ request()->is('dashboard/settings*') ? 'active' : '' }}" href="/dashboard/settings">
                        <i class="bi bi-person"></i>
                        Settings Account
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        @method('delete')
                        <button class="nav-link d-flex align-items-center gap-2">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
