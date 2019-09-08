@extends('Admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Employee
        
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="/requests">
              {{csrf_Field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name">*Name</label>
                  <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                  <label for="pin">*Employee PIN</label>
                  <input id="pin" name="pin" type="text" class="form-control" placeholder="Employee PIN" required>
                </div>

                <div class="form-group">
                  <label for="username">*Preferred ID</label>
                  <input id="username" name="username" type="text" class="form-control" placeholder="Preferred ID" required>
                </div>

                <div class="form-group">
                  <label for="designation">*Designation</label>
                  <input id="designation" name="designation" type="text" class="form-control" placeholder="Designation" required>
                </div>

                <div class="form-group">
                  <label>*Department</label>
                  <select class="form-control" id ="department" name ="department">
                        <option value="0">Select a Department</option>
                    @foreach($depts as $dept)
                        <option value="{{$dept->id}}">{{$dept->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>*Group</label>
                  <select class="form-control" id ="group" name ="group">
                        <option value="0">Select a Group</option>
                    @foreach($gps as $gp)
                        <option value="{{$gp->id}}">{{$gp->name}}</option>
                    @endforeach
                  </select>
                </div>



                <div class="form-group">
                  <label>*Alies</label>

                  <div class="form-group">
                    @foreach($als as $al)
                        <div class="col-sm-3">
                        <label>
                          <input type="checkbox"  name="aliases[]" value="{{$al->id}}"/>  
                          {{$al->name}}
                        </label>
                        </div>
                    @endforeach
                  </div> <br> <br>
                </div>

                <div class="form-group">
                    <label>*Create Domain</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" id="domain" name="domain" value="YES" checked="true">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="domain" name="domain" value="NO">No
                        </label>
                    </div>
                </div>
                       

                <div class="form-group">
                  <label for="company">Company Name</label>
                  <input  id="company" name="company" type="text" class="form-control" placeholder="Company Name" required>
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