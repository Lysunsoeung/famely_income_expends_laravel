@extends('layouts.master')
@section('page_title', 'Manage Members')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Manage Members</h6>
                    <a href="{{ route('members.index') }}" class="btn btn-info float-right">View Members</a>
                </div>


                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="nav-item"><a href="#new-user" class="nav-link active" data-toggle="tab">Show Member</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="new-user">
                            <table class="table datatable-button-html5-columns">
                                    <thead>
                                    <tr class="text-center">
                                        <th>S/N</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Facebook</th>
                                        <th>Instragram</th>
                                        <th>Github</th>
                                    </tr>
                                    </thead>
                                    <tbody  class="text-center">
                                        <?php $i = 1 ?>
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ asset('storage/uploads/members/'.$members->photo) }}" alt="photo"></td>
                                            <td>{{ $members->name }}</td>
                                            <td>{{ $members->description }}</td>
                                            <td>{{ $members->facebook }}</td>
                                            <td>{{ $members->instagram }}</td>
                                            <td>{{ $members->github }}</td>

                                        </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>



        </div>
    </div>

</div>

    {{--Member List Ends--}}

@endsection
