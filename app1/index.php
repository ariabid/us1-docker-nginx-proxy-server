<?php include('partials/head.php'); ?>
<title>Dashboard</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Topbar -->
    <div class="position-fixed w-100" style="z-index: 999">
      <?php include('partials/topbar.php'); ?>
      <?php include('partials/page-menu.php'); ?>
    </div>


    <!-- Main Sidebar Container -->
    <?php include('partials/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding: 120px 0">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">


          <div class="row mb-2">
            <!-- Page Title -->
            <div class="col-sm-6">
              <p class="h2 text-danger">ALERT: DO NOT EDIT THIS DIRECTLY!</p>
              <p class="h3 text-danger">Make Copy first.</p>
              <p class="h4 text-danger">Start Editing in copied version.</p>
              <p class="h5 text-danger">Remove this in copied version.</p>
              <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- Page Title -->

            <!-- /.col -->

            <!-- Page breadcrumb -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

        <!-- 
            Each row should be nested under container or container-fluid.
            for example - 

            <element class="container">
                <element class="row">
                    <element class="col"></element>
                    <element class="col"></element>
                </element>
            </element>

            Where "element" is a valid html tag like div, section, etc.
            
            We can add multiple columns and max is up to 12 columns in a row.

            We can control the column width using col-sm-6, col-md-4, col-lg-3 etc. and for full width we can use col-12.
            Learn more - https://coderomeos.org/bootstrap-tutorial-step-by-step

            See the below grid system that has 4 columns in a row.

            lg - for Large screen
            md - for Medium screen
            sm - for Small screen
        -->

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150 <small style="font-size: 20px">Chapters</small></h3></h3>

                  <p>UNIX SYSTEM</p>
                </div>
                <div class="icon">
                <i class="ion ion-document"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53 <small style="font-size: 20px">Chapters</small></h3>

                  <p>LLM/GPT</p>
                </div>
                <div class="icon">
                  <i class="ion ion-document"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44 <small style="font-size: 20px">Chapters</small></h3>

                  <p>NODEJS Development</p>
                </div>
                <div class="icon">
                <i class="ion ion-document"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65 <small style="font-size: 20px">Chapters</small></h3>

                  <p>MONGODB</p>
                </div>
                <div class="icon">
                <i class="ion ion-document"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
        
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <?php include 'partials/footer.php'; ?>
  </div>
  <?php include 'partials/scripts.php'; ?>
</body>

</html>