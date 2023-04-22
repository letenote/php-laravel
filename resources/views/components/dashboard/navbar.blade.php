<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                @if(isset($newMailBoxLength))
                    @if(isset($newReportLength))
                        <span class="badge badge-warning navbar-badge">
                            {{$newMailBoxLength+$newReportLength}}
                        </span>
                    @endif
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                @if(isset($newMailBoxLength))
                    @if(isset($newReportLength))
                    <span class="dropdown-item dropdown-header">
                        {{$newMailBoxLength+$newReportLength}} Notifications
                    </span>
                    @endif
                @endif
                <div class="dropdown-divider"></div>
                    @if(isset($newMailBoxLength))
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> {{$newMailBoxLength}} new mail
                        @if(isset($lastMailIn))
                            <span class="float-right text-muted text-sm">
                                {{$lastMailIn}}
                            </span>
                        @endif
                    </a>
                    @endif
                <div class="dropdown-divider"></div>
                    @if(isset($newReportLength))
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> {{$newReportLength}} new reports
                        @if(isset($lastReportIn))
                            <span class="float-right text-muted text-sm">
                                {{$lastReportIn}}
                            </span>
                        @endif
                    </a>
                    @endif
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>

        @if(session()->exists("user"))
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        @endif
    </ul>
</nav>
<!-- /.navbar -->
