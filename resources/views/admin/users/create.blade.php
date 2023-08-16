@extends('layouts.admin.admin-app')
@push('title')
  List All Services
@endpush

@push('styles')
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/core.css" />
<link  rel="stylesheet"  type="text/css"  href="{{asset('backend')}}/vendors/styles/icon-font.min.css"/>
<link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/dataTables.bootstrap4.min.css"/>
<link  rel="stylesheet"  type="text/css" href="{{asset('backend')}}/src/plugins/datatables/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('backend')}}/vendors/styles/style.css" />
@endpush

@section('content')
  <h1>Create Users</h1>
  <div class="pd-20 card-box mb-30">
    <div class="clearfix">
      <div class="pull-left">
        <h4 class="text-blue h4">Default Basic Forms</h4>
        <p class="mb-30">All bootstrap element classies</p>
      </div>
      <div class="pull-right">
        <a href="{{route('admin.users')}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>View All Users</a>
      </div>
    </div>
    <form>
      <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
        <div class="col-sm-12 col-md-10">
          <input class="form-control" type="text" placeholder="Johnny Brown">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
        <div class="col-sm-12 col-md-10">
          <input class="form-control" value="bootstrap@example.com" type="email">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
        <div class="col-sm-12 col-md-10">
          <input class="form-control" value="1-(111)-111-1111" type="tel">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Password</label>
        <div class="col-sm-12 col-md-10">
          <input class="form-control" value="password" type="password">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Date</label>
        <div class="col-sm-12 col-md-10">
          <input class="form-control date-picker" placeholder="Select Date" type="text">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Select</label>
        <div class="col-sm-12 col-md-10">
          <select class="custom-select col-12">
            <option selected="">Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>Example file input</label>
        <input type="file" class="form-control-file form-control height-auto">
      </div>

      <div class="">
        <a type="submit" href="#" class="btn btn-primary btn-sm"><i class="fa fa-add"></i>Submit</a>
      </div>

    </form>

  </div>
@endsection



@push('scripts')

<!-- js -->
<script src="{{asset('backend')}}/vendors/scripts/core.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/script.min.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/process.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/layout-settings.js"></script>
<script src="{{asset('backend')}}/src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/vendors/scripts/dashboard3.js"></script>

@endpush
