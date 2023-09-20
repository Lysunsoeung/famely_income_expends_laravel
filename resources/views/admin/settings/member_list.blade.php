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
                    <a href="{{ route('members.create') }}" class="btn btn-info float-right">Add New Members</a>
                </div>


                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="nav-item"><a href="#new-user" class="nav-link active" data-toggle="tab">All Members</a></li>

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
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody  class="text-center">
                                    @foreach($members as $m)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ asset('storage/uploads/members/'.$m->photo) }}" alt="photo"></td>
                                            <td>{{ $m->name }}</td>
                                            <td>{{ $m->description }}</td>
                                            <td>{{ $m->facebook }}</td>
                                            <td>{{ $m->instagram }}</td>
                                            <td>{{ $m->github }}</td>
                                            <td class="text-center">
                                                <div class="list-icons">
                                                    <div class="dropdown">

                                                        <a href="{{ route('members.show', Qs::hash($m->id)) }}" title="View" class="fas fa-view p-1"><i class="fa-eye"></i></a>

                                                        <a href="{{ route('members.edit', Qs::hash($m->id)) }}" title="Edit" class="fas fa-edit p-1"><i class="icon-pencil"></i></a>

                                                        <a id="delete" onclick="confirmDelete(this.id)" href="{{ route('members.destroy', Qs::hash($m->id)) }}" class="fas fa-delete p-1"><i class="fa-trash"></i></a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
