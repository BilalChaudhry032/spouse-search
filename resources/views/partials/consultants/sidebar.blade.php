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
            <li class="{{ Route::current()->getName() == ('consultant.dashboard') ? 'active' : '' }}">
                <a href="{{ url('consultant/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>

            </li>
            <li class="treeview
{{ Route::current()->getName() == ('consultant.view.users') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('consultant.add.user') ? 'active menu-open' : '' }}
            {{ Route::current()->getName() == ('consultant.view.deletedProfiles') ? 'active menu-open' : '' }}
                    ">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Profiles</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Route::current()->getName() == ('consultant.view.users') ? 'active' : '' }}">
                        <a href="{{ route('consultant.view.users') }}"><i class="fa fa-circle-o"></i>View Profiles</a>
                    </li>
                    <li class="{{ Route::current()->getName() == ('consultant.add.user') ? 'active' : '' }}">
                        <a href="{{ route('consultant.add.user') }}"><i class="fa fa-circle-o"></i>Add Profiles</a></li>
                    <li class="{{ Route::current()->getName() == ('consultant.view.deletedProfiles') ? 'active' : '' }}">
                        <a href="{{ route('consultant.view.deletedProfiles') }}"><i class="fa fa-circle-o"></i> Deleted
                            Profiles </a></li>
                </ul>
            </li>
            <li class="treeview  {{ Route::current()->getName() == ('consultant.view.grooms') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-male"></i>
                    <span>Grooms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li {{ Route::current()->getName() == ('consultant.view.grooms') ? 'active' : '' }}>
                        <a href="{{ route('consultant.view.grooms') }}"><i class="fa fa-circle-o"></i> View Grooms</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ Route::current()->getName() == ('consultant.view.brides') ? 'active menu-open' : '' }}">
                <a href="#">
                    <i class="fa fa-female"></i>
                    <span> Brides </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li {{ Route::current()->getName() == ('consultant.view.brides') ? 'active' : '' }}>
                        <a href="{{ route('consultant.view.brides') }}"><i class="fa fa-circle-o"></i> View Brides</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Route::current()->getName() == ('consultant.send.invitation') ? 'active' : '' }}">
                <a href="{{ route('consultant.send.invitation') }}">
                    <i class="fa fa-mail-forward"></i>
                    <span> Send Invitation </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>