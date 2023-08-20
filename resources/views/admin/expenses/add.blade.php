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
                    <h6 class="card-title">Manage Category Expense</h6>
                    <a href="{{route('ex_category.index')}}" class="btn btn-info float-right">View Your Category</a>

                </div>

                <div class="card-body">
                    <div class="tab-content">

                        <form action="{{ route('expenses.store') }}" method="POST">
                            @csrf

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="entry_date">Entry Date</label>
                                    <input type="date" name="expense_date" class="form-control">
                                    @error('expense_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" name="amount" class="form-control" >
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expense_category_id">Expense Category:  <span class="text-danger">*</span></label>
                                    <select class="select form-control select2" id="expense_category_id" name="expense_category_id"  data-fouc data-placeholder="Choose..">
                                        @foreach($expenses as $expense)
                                            <option value="{{ $expense->id }}">{{ $expense->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('expense_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

</div>

    {{--Student List Ends--}}

@endsection
