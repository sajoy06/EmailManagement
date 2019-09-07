@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Alies
        
      </h1>

    </section>

    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <p>
          <a href="groups/create" class="btn btn-primary">Add New Alies</a>
        </p>
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th style="text-align: center;">Actions</th>
          </tr>
          @if(count($groups))
              @foreach($groups as $group)
                <tr >
                  <td>{{ $group->id }}</td>
                  <td>{{ $group->name }}</td>
                  <td>{{ $group->description }}</td>
                  
                  <td style="text-align: center;">
                    <a href="{{$group->id}}" class="btn btn-success">View</a> 
                    <a href="{{$group->id}}/edit" class="btn btn-info">Edit</a> 
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form action="$group" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </td>
                </tr>
              @endforeach
          @else
          <tr><td colspan="4">No Alies Found</td></tr>
          @endif
        </table>
        
      </div>
    </section>


@endsection