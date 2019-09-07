@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Department
        
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/departments">
              {{csrf_Field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name">*Name</label>
                  <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <input id="description" name="description" type="text" class="form-control" placeholder="Description" required>
                </div>
               

              </div>
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

    </section>


@endsection