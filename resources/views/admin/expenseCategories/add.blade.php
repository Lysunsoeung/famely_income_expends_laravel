@extends('layouts.master')
@section('page_title', 'Create Expense Category')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

            @if(Session::has('msg'))
                <p class="alert alert-info">{{ Session::get('msg') }}</p>
            @endif

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">{{ trans('test.Manage Category Expense') }}</h6>
                    <a href="{{route('ex_category.index')}}" class="btn btn-info float-right">{{ trans('test.View Your Category') }}</a>

                </div>


                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-highlight">
                        <li class="nav-item"><a href="#new-user" class="nav-link active" data-toggle="tab">{{ trans('test.Create New Category') }}</a></li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="new-user">
                            <form method="post" class="wizard-form steps-validation" action="{{ route('ex_category.store') }}" data-fouc>
                                @csrf

                                <fieldset>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>{{ trans('test.Category Name:') }} <span class="text-danger">*</span></label>
                                                <input value="{{ old('name') }}"  type="text" name="name" placeholder="{{ trans('test.Category Name') }}" class="form-control">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                    <button type="submit" class="btn btn-info">{{ trans('test.Submit') }}</button>

                                </fieldset>



                            </form>
                        </div>



                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

    {{--Student List Ends--}}

@endsection
