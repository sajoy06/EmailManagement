@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Departments
        
      </h1>

    </section>

    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <p>
          <a href="departments/create" class="btn btn-primary">Add New Department</a>
        </p>
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
          @if(count($departments))
              @foreach($departments as $department)
                <tr>
                  <td>{{ $department->id }}</td>
                  <td>{{ $department->name }}</td>
                  <td>{{ $department->description }}</td>
                  
                  <td>
                    <a href="{{$department->id}}" class="btn btn-success">View</a> 
                    <a href="{{$department->id}}/edit" class="btn btn-info">Edit</a> 
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form action="$department" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </td>
                </tr>
              @endforeach
          @else
          <tr><td colspan="4">No Department Found</td></tr>
          @endif
        </table>
        
      </div>
    </section>


@endsection