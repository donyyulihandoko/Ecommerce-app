        <nav class="sidebar-wrapper">

            <!-- Sidebar brand starts -->
            <div class="sidebar-brand">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Admin Dashboards" />
                </a>
            </div>
            <!-- Sidebar brand starts -->

            <!-- Sidebar menu starts -->
            <div class="sidebar-menu">
                <div class="sidebarMenuScroll">
                    <ul>
                        {{-- dashboard start --}}
                        <li class="sidebar">
                            <a href="{{ route('home.index') }}">
                                <i class="bi bi-house"></i>
                                <span class="menu-text">Dashboards</span>
                            </a>
                        </li>
                        {{-- dashboard end --}}

                        {{-- product start --}}
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-handbag"></i>
                                <span class="menu-text">Product</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="widgets.html">Products</a>
                                    </li>
                                    <li>
                                        <a href="graph-widgets.html">Add Product</a>
                                    </li>
                            </div>
                        </li>
                        {{-- product end --}}

                        {{-- brand start --}}
                        <li class="sidebar-dropdown ">
                            <a>
                                <i class="bi bi-grid"></i>
                                <span class="menu-text">Brand</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{ route('brands.index') }}">Brands</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('brands.create') }}">New Brand</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- brand end --}}

                        {{-- category start --}}
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-grid"></i>
                                <span class="menu-text">Category</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="widgets.html">Categories</a>
                                    </li>
                                    <li>
                                        <a href="graph-widgets.html">New Category</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- category end --}}

                        {{-- order start --}}
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="bi bi-cart3"></i>
                                <span class="menu-text">Order</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="profile.html">Orders</a>
                                    </li>
                                    <li>
                                        <a href="account-settings.html">Order Tracking</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- order end --}}

                        {{-- slider start --}}
                        <li class="sidebar">
                            <a href="#">
                                <i class="bi bi-images"></i>
                                <span class="menu-text">Slider</span>
                            </a>
                        </li>
                        {{-- slider end --}}

                        {{-- coupons start --}}
                        <li class="sidebar">
                            <a href="#">
                                <i class="bi bi-ticket"></i>
                                <span class="menu-text">Coupons</span>
                            </a>
                        </li>
                        {{-- coupons end --}}

                        {{-- users start --}}
                        <li class="sidebar">
                            <a href="#">
                                <i class="bi bi-people"></i>
                                <span class="menu-text">Users</span>
                            </a>
                        </li>
                        {{-- users end --}}

                        {{-- setting start --}}
                        <li class="sidebar">
                            <a href="#">
                                <i class="bi bi-gear"></i>
                                <span class="menu-text">Setting</span>
                            </a>
                        </li>
                        {{-- setting end --}}



                    </ul>
                </div>
            </div>
            <!-- Sidebar menu ends -->

        </nav>
