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
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('login') }}" class="nav-link">Login</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('register') }}" class="nav-link">Register</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
