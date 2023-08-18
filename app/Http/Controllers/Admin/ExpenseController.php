<?php

namespace App\Http\Controllers\Admin;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use App\Http\Requests\StoreExpense;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ExpenseController;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $$expenses = Expense::all();
         // Check if user is admin then he can view all expense
         if (auth()->user()->user_type === 'admin') {
            $data['expenses'] = Expense::with('expense_category')->get();
        } else {
            // But if parent and child user then they can see only they expense
            $data['expenses'] = auth()->user()->expenses;
        }


        // foreach($incomes as $income){
        //     // Dump the category object for each income
        //     dump($income->income_category);
        // }

        return view('admin.expenses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $expenses = ExpenseCategory::all();
        return view('admin.expenses.add',compact('expenses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpense $req)
    {
        $expense = new Expense();
        $expense->entry_date = $req->input('entry_date');
        $expense->amount = $req->input('amount');
        $expense->description = $req->input('description');
        $expense->expense_category_id = $req->input('expense_category_id');

        // Assign the id of the authentication user
        $expense->created_by_id = Auth::id();

        $expense->save();

        $notification = array(
            'message' => 'Expense Created Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('expense.create')->with($notification);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
