<!-- Navbar -->
<nav class="user-nav navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
        @if(session()->exists("user"))
            <div class="text-end">
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </div>
        @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('login') }}" class="nav-link">Login</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('register') }}" class="nav-link">Register</a>
            </li>
        @endif
    </ul>
</nav>
<!-- /.navbar -->
