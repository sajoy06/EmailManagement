<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="
          @if(Auth::user()->image)
            {{ asset('dist/img/avatar5.png') }}" 
          @else 
            {{ asset('dist/img/avatar.png') }}"
         @endif

          class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <?php 
            $segment = Request::segment(1);

            //echo $segment;
        ?>
        <li class="
                  @if($segment == 'home')
                    active
                  @endif
                  ">
          <a href="{{route('home')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>

        <li class="
                  @if($segment == 'requests')
                    active
                  @endif
                  "
                  

                    style="
                          @if(Auth::user()->usertype == '0')
                            display: none !important;
                          @endif
                          ">
          <a href="/requests">
            <i class="fa fa-id-card-o"></i> <span>Request</span>
            
          </a>
        </li>

        <li class="
                  @if($segment == 'emails')
                    active
                  @endif
                  ">
          <a href="/emails">
            <i class="fa fa-envelope-o"></i> <span>Email</span>
            
          </a>
        </li>

         <li class="
                  @if($segment == ' ')
                    active
                  @endif
                  ">
          <a href="#">
            <i class="fa fa-windows"></i> <span>Domain</span>
            
          </a>
        </li>
         <li class="
                  @if($segment == ' ')
                    active
                  @endif
                  ">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>iNews</span>
            
          </a>
        </li>





        <li class="
                  @if($segment == 'users')
                    active
                  @endif
                  ">
          <a href="/users">
            <i class="fa fa-user-circle"></i> <span>User</span>
            
          </a>
        </li>

        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li class="
                  @if($segment == 'departments')
                    active
                  @endif
                  ">
              <a href="/departments">
                <i class="fa fa-users"></i> <span>Departments</span>
                
              </a>
            </li>

            <li class="
                  @if($segment == 'groups')
                    active
                  @endif
                  ">
              <a href="/groups">
                <i class="fa fa-object-group"></i> <span>Groups</span>
                
              </a>
            </li>
            <li class="
                  @if($segment == 'aliases')
                    active
                  @endif
                  ">
              <a href="/aliases">
                <i class="fa fa-object-group"></i> <span>Alias</span>
                
              </a>
            </li>


            
          </ul>
        </li>
      
        <li class="header">LABELS</li>
        
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>