@extend('admin-master')
   @section('main-admin')


<!--  1  -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category-Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Category-Dashboard</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admin-id</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Title">
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Publication Status</label>
                        <select class="form-control">
                          <option>Public</option>
                          <option>Private</option>
                         
                        </select>
                      </div>
                    </div>
        <!-- /.row -->
        <!-- Main row -->
        
              
              <!-- /.card-header -->
              
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                 
                    <!-- /.direct-chat-text -->
                 
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
               
    <!-- /.content -->
    @endsection