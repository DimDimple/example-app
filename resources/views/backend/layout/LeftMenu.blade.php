<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('images/icon/logoDMgo.png')}}" style="width: 60%" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class='bx bxs-dashboard' ></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/dashboard">Admin</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="js-arrow" href="#">
                        <i class='bx bx-user'></i>Manage User</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/employee">Employee</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a class="js-arrow" href="#">
                        <i class='bx bx-data'></i>Manage Shift</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/report">Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/createB">
                        <i class='bx bxs-store'></i>Create Branch</a>
                </li>
                <li>
                    <a href="/manageP">
                        <i class='bx bxs-component'></i>Manage Parcels</a>
                      
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="/login">Login</a>
                        </li>
                        <li>
                            <a href="/register">Register</a>
                        </li>
                        <li>
                            <a href="/forgetP">Forget Password</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->