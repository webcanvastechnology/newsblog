@extend('admin-master')
   @section('main-admin')






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
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Category Name">
                  </div>
                  
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option>--Select--</option>
                          <option value="1">Publish</option>
                          <option value="0">Unpublish</option>
                         
                        </select>
                      </div>
                    </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
        <!-- /.row -->
        <!-- Main row -->
        
              
              
               
    <!-- /.content -->
    @endsection