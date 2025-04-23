<?php include(__DIR__ .'/../partials/head.php'); ?>
<title>TEST</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Topbar -->
    <div class="position-fixed w-100" style="z-index: 999">
      <?php include('./../partials/topbar.php'); ?>
      <?php include('./../partials/page-menu.php'); ?>
    </div>


    <!-- Main Sidebar Container -->
    <?php include('./../partials/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding: 120px 0">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">


          <div class="row mb-2">
            <!-- Page Title -->
            <div class="col-sm-6">
              <h1 class="m-0">Page Title </h1>
            </div>
            <!-- Page Title -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                            <p class="h2">YOUR CONTENT GOES HERE</p>
                            <h2 class="h4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sit doloremque natus velit pariatur non? Cum commodi, dolorum numquam voluptas necessitatibus vero neque quam quod dicta. Adipisci est illum repudiandae.</h2>
                            
                        </div>
                </div>
            </div>
      </section>
      <!-- /.content -->
    </div>




    
    <?php include './../partials/footer.php'; ?>
  </div>
  <!-- ./wrapper -->

  <?php include './../partials/scripts.php'; ?>
</body>

</html>