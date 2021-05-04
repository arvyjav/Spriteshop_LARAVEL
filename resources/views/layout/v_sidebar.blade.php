

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/acc" target="_blank" class="d-block">{{Auth::user()->name}} </a>
          <a href="#"><i class="fa fa-circle text-success"></i> 
          @if (auth()->user()->level == 1)
          Admin
          @elseif (auth()->user()->level == 2)

          Uploader
          @elseif (auth()->user()->level == 3)

          User

          @endif
          </a>

        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         @if(auth()->user()->level ==1)
         <li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
          </li>

          <li class="nav-item">
            <a href="/shopadmin" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Shop
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/crud" class="nav-link">
                  <i class="far fa-lemon nav-icon"></i>
                  <p>CRUD 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/crud2" class="nav-link">
                  <i class="far fa-lemon nav-icon"></i>
                  <p>CRUD 2</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
              <a href="/users" class="nav-link">
                <i class="fas fa-anchor nav-icon"></i> 
                <p>Data Users</p>
              </a>
            </li>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="/comments" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/report" class="nav-link">
              <i class="fas fa-bug nav-icon"></i>
              <p>Report</p>
            </a>
          </li>
          
            @elseif(auth()->user()->level == 2)


           <li class="nav-item">
            <a href="/uploader" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
            </p>
             </a>
           </li>
           <li class="nav-item">
            <a href="/shopadmin" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Shop
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
      
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="/comments" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/report" class="nav-link">
              <i class="fas fa-bug nav-icon"></i>
              <p>Report</p>
            </a>
          </li>

         @elseif(auth()->user()->level==3)

         <li class="nav-item">
          <a href="/user" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              chuck
            </p>
          </a>
        </li>

         @endif
          
        
         
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
