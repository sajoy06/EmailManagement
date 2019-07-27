@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New User
        
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/users">
              {{csrf_Field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="username">*Username</label>
                  <input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label>*User Type</label>
                  <select class="form-control" id ="usertype" name ="usertype">
                    <option value="1">Admin</option>
                    <option value="2">Creator</option>
                    <option value="3">Requester</option>
                    <option value="4">Viewer</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="email">Email address</label>
                  <input  id="email" name="email" type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">*Password</label>
                  <input type="password" class="form-control"  id="password" name="password" placeholder="Password" required> 
                  
                </div> 

               

               <!--  <div class="form-group">
                    <label for="password-confirm">{{ __('*Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    
                </div>  -->

                <div class="form-group">
                  <label for="designation">Designation</label>
                  <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone(+8801....">
                </div>

                <div class="form-group">
                  <label for="image">Image:</label>
                  <input type="file" id="image" name="image">                  
                </div>
               
              </div>
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

    </section>


@endsection