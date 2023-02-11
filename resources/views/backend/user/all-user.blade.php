@extends('backend.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h1></h1>
          
          
  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial</th>
                  <th>Name</th>
                  <th>Email(s)</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

            @foreach($all as $key=>$row)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->role}}</td>

                  </td>
                    <td>
                        <a href="{{ URL::to('edit-user/'.$row->id)}}" class="btn btn-primary">Edit User</a>
                        <a href="{{ URL::to('delete-user/'.$row->id)}}" class="btn btn-secondary">Delete
                        </a>
                    </td>
                </tr>
            @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email(s)</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                </tfoot>
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
  </div>
@endsection