<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="{{ route('dashboard') }}" >
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboards

            </a>
            <!-- Sidenav Accordion (Account)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Account" aria-expanded="false" aria-controls="Account">
                <div class="nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Users
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Account" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="{{ route('createUsers')}}">
                        Create Users
                        <span class="badge bg-success-soft text-primary ms-auto">New</span>
                    </a>
                    <a class="nav-link" href="{{ route('superAdminUsers')}}">
                        List Users
                        <span class="badge bg-primary-soft text-primary ms-auto">Manage</span>
                    </a>

                </nav>
            </div>
            <!-- Sidenav Accordion (Product)-->

            <a class="nav-link collapsed" href="{{ route('superAdminCatgegries')}}" >
                <div class="nav-link-icon"><i class="fa-solid fa-bars"></i></div>
                Category
            </a>
            {{-- <div class="collapse" id="Category" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="{{ route('createCategory') }}">
                        Create Categories
                        <span class="badge bg-primary-soft text-primary ms-auto">Create</span>
                    </a>
                    <a class="nav-link" href="{{ route('superAdminCatgegries')}}">
                        List Categories

                    </a>
                </nav>
            </div> --}}
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Asseccories" aria-expanded="false" aria-controls="Asseccories">
                <div class="nav-link-icon"><i class="fa-solid fa-plant-wilt"></i></div>
                Products
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Asseccories" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="{{ route('createAccessories')}}">
                        Create Products
                        <span class="badge bg-primary-soft text-primary ms-auto">new</span>
                    </a>
                    <a class="nav-link" href="{{ route('adminAccessories')}}">
                        List Products
                    </a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Orders" aria-expanded="false" aria-controls="Orders">
                <div class="nav-link-icon"><i class="fa-solid fa-dolly"></i></div>
                Orders
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Orders" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="{{ route('ListOrder')}}">
                        List Order
                        <span class="badge bg-primary-soft text-primary ms-auto">manage</span></span>
                    </a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="{{ route('accountAdmin') }}" >
                <div class="nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                Account
            </a>
            <a class="nav-link collapsed" href="/logout" data-bs-toggle="collapse" data-bs-target="#Orders" aria-expanded="false" aria-controls="Orders">
                <div class="nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                Logout

            </a>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ session()->get('username'); }}</div>
        </div>
    </div>
</nav>
