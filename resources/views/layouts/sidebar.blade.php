<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{Auth::user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->email}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" bg-info data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
          <a href="{{route('staff.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
             HEF
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
             <a href="{{route('staff.index')}}" class="nav-link active">
                  <i class="far fas fa-shopping-cart nav-icon"></i>
                  <p>All  HEF  </p>
                </a>
              </li>
              <li class="nav-item">
              <a  href="{{route('staff.create')}}"  class="nav-link">
                  <i class="far fas fa-shopping-cart nav-icon"></i>
                  <p>Create  HEF  </p>
                </a>
              </li>
            </ul>
          </li>
          <!--<li class="nav-item has-treeview">-->
          <!--<a href="#" class="nav-link bg-danger ">-->
          <!--    <i class="nav-icon far fa-plus-square"></i>-->
          <!--    <p>-->
          <!--    Category-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon far fa-plus-square"></i>-->
          <!--        <p>All Category  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon far fa-plus-square"></i>-->
          <!--        <p>Create Product  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          </li>
          <!--<li class="nav-item has-treeview">-->
          <!--<a href="#" class="nav-link bg-success ">-->
          <!--    <i class="nav-icon fas fa-book"></i>-->
          <!--    <p>-->
          <!--    Subcategory-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon fas fa-book"></i>-->
          <!--        <p>All Subcategory  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon fas fa-book"></i>-->
          <!--        <p>Create Subcategory  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item has-treeview">-->
          <!--<a href="#" class="nav-link bg-light ">-->
          <!--    <i class="nav-icon fas fa-tachometer-alt"></i>-->
          <!--    <p>-->
          <!--    Slider Image-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon fas fa-tachometer-alt"></i>-->
          <!--        <p>All Slider  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon fas fa-tachometer-alt"></i>-->
          <!--        <p>Create Slider  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item has-treeview">-->
          <!--<a href="#" class="nav-link bg-purple ">-->
          <!--    <i class="nav-icon far fa-circle text-danger"></i>-->
          <!--    <p>-->
          <!--    Lab Image-->
          <!--      <i class="right fas fa-angle-left"></i>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <ul class="nav nav-treeview">-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon far fa-circle text-danger"></i>-->
          <!--        <p>Lab Image  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--    <li class="nav-item">-->
          <!--    <a  href="#"  class="nav-link">-->
          <!--        <i class="nav-icon far fa-circle text-danger"></i>-->
          <!--        <p>Create Lab Image  </p>-->
          <!--      </a>-->
          <!--    </li>-->
          <!--  </ul>-->
          <!--</li>-->
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
