<div class="page-header">

    <div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>

    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-md-flex d-none">
        <li class="breadcrumb-item">
            <i class="bi bi-house"></i>
            <a href="index.html">{{ $title ?? config('APP_NAME') }}</a>
        </li>
        {{-- <li class="breadcrumb-item breadcrumb-active" aria-current="page">Sales</li> --}}
    </ol>
    <!-- Breadcrumb end -->

    <!-- Header actions ccontainer start -->
    <div class="header-actions-container">

        <!-- Search container start -->
        <div class="search-container">

            <!-- Search input group start -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search anything">
                <button class="btn" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            <!-- Search input group end -->

        </div>
        <!-- Search container end -->

        @if (Auth::check())
            @if (Auth::user()->role == 'user')
                <!-- Leads start -->
                <a href="orders.html" class="leads d-xl-flex">
                    <div class="lead-details">You have <span class="count"> 21 </span> new leads </div>
                    <span class="lead-icon"><i
                            class="bi bi-bell-fill animate__animated animate__swing animate__infinite infinite"></i><b
                            class="dot animate__animated animate__heartBeat animate__infinite"></b></span>
                </a>
                <!-- Leads end -->
            @endif

            <!-- Header actions start -->
            <ul class="header-actions">

                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                        aria-haspopup="true">
                        <span class="user-name d-none d-md-block">{{ Auth::user()->name }}</span>
                        <span class="avatar">
                            <img src="{{ asset('assets/images/user.png') }}" alt="Admin Templates">
                            <span class="status online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->
        @else
            <!-- Leads start -->
            <a href="{{ route('login') }}" class="leads d-xl-flex">
                <div class="lead-details"><span class="count"> Login Here</span></div>
                <span class="lead-icon"><i
                        class="bi bi-person-badge animate__animated animate__swing animate__infinite infinite"></i>
                </span>
            </a>
            <!-- Leads end -->
        @endif

    </div>
    <!-- Header actions ccontainer end -->

</div>
