@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Alias
        
      </h1>

    </section>

    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <p>
          <a href="aliases/create" class="btn btn-primary">Add New Alias</a>
        </p>
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th style="text-align: center;">Actions</th>
          </tr>
          @if(count($aliases))
              @foreach($aliases as $alias)
                <tr >
                  <td>{{ $alias->id }}</td>
                  <td>{{ $alias->name }}</td>
                  <td>{{ $alias->description }}</td>
                  
                  <td style="text-align: center;">
                    <a href="{{$alias->id}}" class="btn btn-success">View</a> 
                    <a href="{{$alias->id}}/edit" class="btn btn-info">Edit</a> 
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form action="$group" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </td>
                </tr>
              @endforeach
          @else
          <tr><td colspan="4">No Alias Found</td></tr>
          @endif
        </table>
        
      </div>
    </section>


@endsection