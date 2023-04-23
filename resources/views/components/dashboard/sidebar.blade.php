<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte-v3')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Laravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if(isset($fullName))
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    @if(isset($avatar))
                        <img src="{{asset('adminlte-v3')}}/dist/img/{{$avatar}}" class="img-circle elevation-2" alt="User Image">
                    @endif
                </div>
                <div class="info">
                    <a href="" class="d-block">{{$fullName}}</a>
                </div>
            </div>
        @else
            <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
                <div class="lds-ripple"><div></div><div></div></div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    @if(isset($redirect_to))
                    <a href="{{$redirect_to}}" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                    @endif
                </li>

                <li class="nav-item">
                    @if(isset($redirect_to))
                    <a href="{{$redirect_to}}/mailbox" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            @if(isset($newMailBoxLength))
                            <span class="badge badge-primary right">{{$newMailBoxLength}}</span>
                            @endif
                        </p>
                    </a>
                    @endif
                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Project in staff

                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Project in admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>
