@extends('dashboard')

@section('title')
Dashboard
@endsection

@section('content')
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Dashboard Page
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
        </section>

        <section class="content">

        @include('backend.boxes')

        @include('backend.sales')

        </section>
     

          

      </div><!-- /.content-wrapper -->
      @endsection