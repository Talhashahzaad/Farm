<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Kusnaedi</b>
                            <p>Hello, Bro!</p>
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Dedik Sugiharto</b>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Agung Ardiansyah</b>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="{{ asset('admin/assets/img/avatar/avatar-4.png') }}"
                                class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Ardian Rahardiansyah</b>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                            <div class="time">16 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Alfa Zulkarnain</b>
                            <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-icon bg-primary text-white">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Template update is available now!
                            <div class="time text-primary">2 Min Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon bg-success text-white">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Low disk space. Let's clean it!
                            <div class="time">17 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Welcome to Stisla template!
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('admin/assets/img/avatar/avatar-1.png') }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard.index') }}">Check A Treatment</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard.index') }}">CAT</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Starter</li>
            <li class="{{ setSidebarActive(['admin.dashboard.index']) }}"><a class="nav-link"
                    href="{{ route('admin.dashboard.index') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li
                class="dropdown {{ setSidebarActive(['admin.listing.*', 'admin.pending-listing.*', 'admin.certificate.*', 'admin.practitioner.*', 'admin.service.*', 'admin.package.*', 'admin.category.*', 'admin.location.*', 'admin.amenity.*', 'admin.tag.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i> <span>Listings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.listing.*']) }}"><a class="nav-link"
                            href="{{ route('admin.listing.index') }}">All Listing</a></li>
                    <li class="{{ setSidebarActive(['admin.pending-listing.*']) }}"><a class="nav-link"
                            href="{{ route('admin.pending-listing.index') }}">Pending Listing</a></li>
                    <li class="{{ setSidebarActive(['admin.category.*']) }}"><a class="nav-link"
                            href="{{ route('admin.category.index') }}">Treatment Categories</a></li>
                    <li class="{{ setSidebarActive(['admin.service.*']) }}"><a class="nav-link"
                            href="{{ route('admin.service.index') }}">Treatments</a></li>
                    <li class="{{ setSidebarActive(['admin.package.*']) }}"><a class="nav-link"
                            href="{{ route('admin.package.index') }}">Treatment Packages</a></li>
                    <li class="{{ setSidebarActive(['admin.location.*']) }}"><a class="nav-link"
                            href="{{ route('admin.location.index') }}">Locations</a></li>
                    <li class="{{ setSidebarActive(['admin.amenity.*']) }}"><a class="nav-link"
                            href="{{ route('admin.amenity.index') }}">Amenities</a></li>
                    <li class="{{ setSidebarActive(['admin.tag.*']) }}"><a class="nav-link"
                            href="{{ route('admin.tag.index') }}">Tags</a></li>
                    <li class="{{ setSidebarActive(['admin.practitioner.*']) }}"><a class="nav-link"
                            href="{{ route('admin.practitioner.index') }}">Practitioner Qualifications</a></li>
                    <li class="{{ setSidebarActive(['admin.certificate.*']) }}"><a class="nav-link"
                            href="{{ route('admin.certificate.index') }}">Professional Affiliations </a></li>

                </ul>
            </li>
            {{--
            <li class="{{ setSidebarActive(['admin.dashboard.index']) }}"><a
                    href="{{ route('admin.dashboard.index') }}" class="nav-link"><i class="far fa-file-alt"></i>
                    <span>Contact Form</span></a></li> --}}
            <li class="dropdown {{ setSidebarActive(['admin.contact-form.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.contact-form.*']) }}"><a class="nav-link"
                            href="{{ route('admin.contact-form.index') }}">Contact Form</a></li>
                </ul>
            </li>
            <li class="dropdown {{ setSidebarActive(['admin.blog.*', 'admin.blog-category.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fab fa-blogger-b"></i>
                    <span>Manage Blogs</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.blog.*']) }}"><a class="nav-link"
                            href="{{ route('admin.blog.index') }}">Blog</a></li>
                    <li class="{{ setSidebarActive(['admin.blog-category.*']) }}"><a class="nav-link"
                            href="{{ route('admin.blog-category.index') }}">Category</a></li>
                </ul>
            </li>
            <li class="dropdown {{ setSidebarActive(['admin.listing-package.*']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-dollar-sign"></i>
                    <span>Manage Packages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.listing-package.*']) }}"><a class="nav-link"
                            href="{{ route('admin.listing-package.index') }}">Packages</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.payment-settings.*']) }}"><a class="nav-link"
                            href="{{ route('admin.payment-settings.index') }}">Payment Settings</a></li>
                </ul>
            </li>
            <li class="{{ setSidebarActive(['admin.cat-video-upload.index']) }}">
                <a class="nav-link" href="{{ route('admin.cat-video-upload.index') }}">
                    <i class="far fa-file-video"></i> <span>All Videos</span>
                </a>
            </li>
            <li class="{{ setSidebarActive(['admin.settings.index']) }}">
                <a class="nav-link" href="{{ route('admin.settings.index') }}">
                    <i class="fas fa-cogs"></i> <span>Settings</span>
                </a>
            </li>
            <li class="{{ setSidebarActive(['admin.coupon.index']) }}">
                <a class="nav-link" href="{{ route('admin.coupon.index') }}">
                    <i class="nav-icon  fas fa-ticket-alt"></i> <span>Coupons</span>
                </a>
            </li>

            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                        Page</span></a></li>
        </ul>


    </aside>
</div>
