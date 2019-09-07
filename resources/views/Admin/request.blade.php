@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All User
        
      </h1>

    </section>

    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <p>
          <a href="requests/create" class="btn btn-primary">New Request</a>
        </p>
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Actions</th>
          </tr>
          
          <tr><td colspan="4">No Users Found</td></tr>
         
        </table>
        
      </div>
    </section>


@endsection