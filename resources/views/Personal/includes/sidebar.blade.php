<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <div class="sidebar-brand">

        <a href="./index.html" class="brand-link">

            <img
                src="../../dist/assets/img/AdminLTELogo.png"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">AdminBlog</span>
        </a>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.user')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.post')}}" class="nav-link">
                    <i class="nav-icon fa-note-sticky"></i>
                    <p>Post</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.categories')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-tag"></i>
                    <p>Tag</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
