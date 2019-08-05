<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('../storage/uploads/avatar/default.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Route::current()->getName() == ('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>

            </li>

            <li class="treeview {{ Route::current()->getName() == ('admin.all.user') ? 'active' : '' }}
            {{ Route::current()->getName() == ('admin.verified.user') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('admin.unverified.user') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('admin.featured.user') ? 'active menu-open' : '' }}
                    ">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Profiles</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
                <ul class="treeview-menu">
                    <li class="{{ Route::current()->getName() == ('admin.all.user') ? 'active' : '' }}">
                        <a href="{{ route('admin.all.user') }}"><i class="fa fa-circle-o"></i> All Profiles</a>
                    </li>
                    <li class="{{ Route::current()->getName() == ('admin.verified.user') ? 'active' : '' }}">
                        <a href="{{ route('admin.verified.user') }}"><i class="fa fa-circle-o"></i> Verified Profiles </a>
                    </li>
                    <li class="{{ Route::current()->getName() == ('admin.unverified.user') ? 'active' : '' }}">
                        <a href="{{ route('admin.unverified.user') }}"><i class="fa fa-circle-o"></i> Unverified Profiles</a>
                    </li>
                    <li class="{{ Route::current()->getName() == ('admin.featured.user') ? 'active' : '' }}">
                        <a href="{{ route('admin.featured.user') }}"><i class="fa fa-circle-o"></i> Featured Profiles</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ Route::current()->getName() == ('admin.all.grooms') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-male"></i>
                    <span>Grooms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" >
                    <li class="{{ Route::current()->getName() == ('admin.all.grooms') ? 'active' : '' }}">
                        <a href="{{ route('admin.all.grooms') }}"><i class="fa fa-circle-o"></i> All Grooms </a></li>
                </ul>
            </li>
            <li class="treeview {{ Route::current()->getName() == ('admin.all.brides') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-female"></i>
                    <span> Brides </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Route::current()->getName() == ('admin.all.brides') ? 'active' : '' }}" >
                        <a href="{{ route('admin.all.brides') }}"><i class="fa fa-circle-o"></i> All Brides</a></li>
                </ul>
            </li>

            <li class="treeview
                {{ Route::current()->getName() == ('admin.deleted.profiles') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('admin.deleted.brides') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('admin.deleted.grooms') ? 'active menu-open' : '' }}
">
                <a href="#">
                    <i class="fa fa-trash"></i>
                    <span> Deleted Profiles </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Route::current()->getName() == ('admin.deleted.profiles') ? 'active' : '' }}">
                        <a href="{{ route('admin.deleted.profiles') }}"><i class="fa fa-circle-o"></i> All Deleted </a></li>
                    <li class="{{ Route::current()->getName() == ('admin.deleted.brides') ? 'active' : '' }}">
                        <a href="{{ route('admin.deleted.brides') }}"><i class="fa fa-circle-o"></i> Deleted Brides </a></li>
                    <li class="{{ Route::current()->getName() == ('admin.deleted.grooms') ? 'active' : '' }}">
                        <a href="{{ route('admin.deleted.grooms') }}"><i class="fa fa-circle-o"></i> Deleted Grooms </a></li>

                </ul>
            </li>

            <li class="treeview
            {{ Route::current()->getName() == ('admin.add.consultant') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('admin.view.consultants') ? 'active menu-open' : '' }}
">
                <a href="#">
                    <i class="fa fa-user-circle"></i>
                    <span>Consultants</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Route::current()->getName() == ('admin.add.consultant') ? 'active' : '' }}">
                        <a href="{{ route('admin.add.consultant') }}"><i class="fa fa-circle-o"></i> Add Consultants</a></li>
                    <li class="{{ Route::current()->getName() == ('admin.view.consultants') ? 'active' : '' }}">
                        <a href="{{ route('admin.view.consultants') }}"><i class="fa fa-circle-o"></i> View Consultants</a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>