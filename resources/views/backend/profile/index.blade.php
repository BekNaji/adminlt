@extends('dashboard')

@section('title')
Profile 
@endsection

@section('content')
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Profile Page
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <div class="box box-primary">
                
                
                 <img src="{{asset('assets')}}/dist/img/avatar.png">
                

                 <div class="box-footer">
                 <h4>Profile Image</h4>
                 </div>
              </div><!-- /.box -->
            </div>


          <div class="col-md-9">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email }}">
                    </div>

                     <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      <p>If the password field is empty will be same </p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <input type="file" id="exampleInputFile">
                      
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->

            </div>

        </section>
     

          

      </div><!-- /.content-wrapper -->
      @endsection