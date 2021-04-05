@extend('admin-master')
   @section('main-admin')






  <!-- Content Wrapper. Contains page content -->
  
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category-id</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
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
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('saveblog')}}" method="POST">
                
               @csrf

                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" class="form-control" id="blog_name" placeholder="blog_name" name="Blog Name">
                  </div>

                  <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="select_category">
                          <option>--Select--</option>
                          <option value="1">Sports</option>
                          <option value="2">Politics</option>
                         
                        </select>
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file_input"  placeholder="File Input">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Short Description</label>
                  <textarea name="short_desc"></textarea>
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Long Description</label>
                  <textarea name="long_desc"></textarea>
                </div>

                <div class="form-group">
                        <label>status</label>
                        <select class="form-control" name="status">
                          <option>--Select--</option>
                          <option value="1">Publish</option>
                          <option value="0">Unpublish</option>
                         
                        </select>
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
    </section>           
    <!-- /.content -->
    <script>
        CKEDITOR.replace( 'short_desc' );
      </script>
                <!-- /.content -->
    <script>
          CKEDITOR.replace( 'long_desc' );
      </script>
    @endsection