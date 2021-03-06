@extend('admin-master')
   @section('main-admin')






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage-Blog</h1>
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
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Blog Title</th>
                    <th>Category ID</th>
                    <th>Blog Image</th>
                    <th>Short Description</th>
                    <th>Long Description</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Trash</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($manage_blog as $v_blog)
                  <tr>
                    <td>{{$v_blog->id}}</td>
                    <td>{{$v_blog->blog_title}}</td>
                    <td>{{$v_blog->category_id}}</td>
                    <td>{{$v_blog->blog_img}}</td>
                    <td>{!! $v_blog->short_desc !!}</td>
                    <td>{!! $v_blog->long_desc !!}</td>
                    @if($v_blog->status==1)
                    <td><i class="far fa-thumbs-up fa-2x" style="color: green;"></i></td>
                    @else
                    <td><i class="far fa-thumbs-down fa-2x" style="color: red;"></i></td>
                    @endif
                    <td><a href="{{URL::to('edit-blog/'.$v_blog->id)}}">Edit</a></td>
                    <td><a href="{{URL::to('delete-blog/'.$v_blog->id)}}">Delete</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
        <!-- /.row -->
        <!-- Main row -->
        
             
              
               
    <!-- /.content -->
    @endsection