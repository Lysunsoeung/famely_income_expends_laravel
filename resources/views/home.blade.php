@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                      <a href="{{url('admin/routes')}}">Admin</a>
                    @elseif(auth()->user()->is_admin == 2)
                      <a href="{{url('parent/routes')}}">Parent</a>
                    @else
                      <a href="{{url('child/routes')}}">Child</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
