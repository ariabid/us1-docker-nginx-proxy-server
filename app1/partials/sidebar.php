<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link d-block">
    <span class="brand-text font-weight-light"><img src="/dist/img/demo-logo.png" style="width: 100px" class="m-auto" alt=""></span>

  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->
    <?php include(__DIR__ .'/search.php'); ?>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="/" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>

        </li>

        <!-- ZERO Level Menu  -->
        <li class="nav-header">ZERO LEVEL HEADING</li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.1/" class="nav-link" target="_blank" >
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>


        <!-- 1 Level Menu - max-level 1 -->
        <li class="nav-header">ONE LEVEL HEADING</li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
                Flowers
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gardenia</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Clematis</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Multi Level Menu - max-level 2 -->
        <li class="nav-header">TWO LEVEL HEADING</li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
                Flowers & Fruits
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hibiscus</p>
              </a>
            </li>
            <!-- Fruit level starts -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Fruits
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Avacado</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Mango</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Kiwi</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Fruit level ends -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jasmine</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- To add more levels -->
            <!-- 
                Copy Fruit level from <li> ... </li>
                and paste just after the item list (<li> ... </li>).
                See the HEADING below.
            -->
        <!-- To add more levels -->

        <!-- Multi Level Menu - max-level 2 -->
        <li class="nav-header">THREE LEVEL HEADING</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
                Flowers/Fruits/Vegs
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hibiscus</p>
              </a>
            </li>
            <!-- Fruit level starts -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Fruits
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Avacado</p>
                  </a>
                </li>
                <!-- Adding new 3rd level -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                        Veges
                        <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Potato</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Tomato</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End new 3rd level -->
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jasmine</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="/page.php" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Page Example</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/test/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>NEW DIRECTORY PAGE</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>