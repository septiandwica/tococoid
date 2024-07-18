<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->role_id== 1)
        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard/general-settings/edit') }}">
                <i class="bi bi-gear"></i>
                <span>General Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard/product/list') }}">
                <i class="bi bi-card-list"></i>
                <span>Blog</span>
            </a>
        </li>
    </ul>
</aside>
