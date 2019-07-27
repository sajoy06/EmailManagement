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
          <a href="users/create" class="btn btn-primary">Add New News</a>
        </p>
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Actions</th>
          </tr>
          @if(count($users))
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->username }}</td>
                  <td>
                    @if($user->usertype == "1")
                      Admin
                    @elseif($user->usertype == "2")
                      Creator
                    @elseif($user->usertype == "3")
                      Requester
                    @elseif($user->usertype == "4")
                      Viewer
                    @endif
                 </td>
                  <td>
                    <a href="{{$user->id}}" class="btn btn-success">View</a> 
                    <a href="{{$user->id}}/edit" class="btn btn-info">Edit</a> 
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form action="$user" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </td>
                </tr>
              @endforeach
          @else
          <tr><td colspan="4">No Users Found</td></tr>
          @endif
        </table>
        
      </div>
    </section>


@endsection