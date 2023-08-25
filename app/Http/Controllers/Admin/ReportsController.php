<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Helpers\Qs;
use App\Models\Income;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    protected $user;

    public function weekly_index(){

        // Get the authenticate user
        $user = auth()->user();

        $year = request()->query('y', Carbon::now()->year);
        $month =  request()->query('m', Carbon::now()->month);
        $week =  request()->query('w', 1);

        // Calculate the starting and ending dates of the selected month
        $from = Carbon::create($year, $month, 1)->startOfMonth();
        $to = Carbon::create($year, $month, 1)->endOfMonth();

        // Calculate the starting and ending dates of the selected week within the selected month
        $from = $from->addWeeks($week - 1)->startOfWeek();
        $to = clone $from;
        $to->addDays(6);


        $data['selectedMonth'] = $month;


        $data['selectedYear'] = $year;

        $data['months'] = $months = Qs::months();

        // From current year to 2000
        $data['years'] = $years = range(Carbon::now()->year, 2000);

        // Calculate the number of weeks in the selected month
        $lastDayOfMonth = Carbon::create($year, $month)->endOfMonth();

        $weeksInMonth = $lastDayOfMonth->weekOfMonth;

        $data['selectedWeek'] = $week;


        $filteredIncomes = Income::with('income_category')
            ->where(function($query) use ($user){
                if(Qs::userIsAdmin()){

                }elseif(Qs::userIsParent()){
                    $query->where('created_by_id',$user->id)
                        ->orWhereIn('created_by_id',$user->children->pluck('id'));
                }else{
                    $query->where('created_by_id',$user->id);
                }
            })
            ->whereBetween('entry_date', [$from, $to])
            ->whereNotNull('income_category_id')
            ->orderBy('amount', 'desc')
            ->get();

        // Check filter
        if($filteredIncomes->isEmpty()){
            // No data found, set a message
            $data['noDataMessage'] = "No data found for the selected year and month.";
        }else{

            $incomesTotal = $filteredIncomes->sum('amount');

            // Group the filtered incomes by income category
            $groupedIncoems = $filteredIncomes->groupBy('income_category_id');

            $incomesSummary = [];

            foreach($groupedIncoems as $incomeCategoryId => $incomes){
                    $incomeCategory = $incomes->first()->income_category->name;
                    $incomesSummary[$incomeCategory] = [
                        'name' => $incomeCategory,
                        'amount' => $incomes->sum('amount'),
                    ];

            }

            $data = [
                'incomesTotal' => $incomesTotal,
                // 'weeksInMonth' => $weeksInMonth,
                'selectedWeek' => $week,
                'selectedMonth' => $month,
                'months' => $months,
                'week' => $week,
                'selectedYear' => $year,
                'years' => $years,
                'filteredIncomes' => $filteredIncomes,
                'incomesSummary' => $incomesSummary,

            ];
        }

        return view('admin.reports.weekly.index',$data,compact('weeksInMonth'));
        // return dd($weeksInMonth);
    }

    public function get_monthly(){
        // Get the authenticate user
        $user = auth()->user();

        $year = request()->query('y', Carbon::now()->year);
        $month =  request()->query('m', Carbon::now()->month);

        // Calculate the starting and ending dates of the selected month
        $from = Carbon::create($year, $month, 1)->startOfMonth();
        $to = Carbon::create($year, $month, 1)->endOfMonth();


        $data['selectedMonth'] = $month;


        $data['selectedYear'] = $year;

        $data['months'] = $months = Qs::months();

        // From current year to 2000
        $data['years'] = $years = range(Carbon::now()->year, 2000);


        $filteredIncomes = Income::with('income_category')
            ->where(function($query) use ($user){
                if(Qs::userIsAdmin()){

                }elseif(Qs::userIsParent()){
                    $query->where('created_by_id',$user->id)
                        ->orWhereIn('created_by_id',$user->children->pluck('id'));
                }else{
                    $query->where('created_by_id',$user->id);
                }
            })
            ->whereBetween('entry_date', [$from, $to])
            ->whereNotNull('income_category_id')
            ->orderBy('amount', 'desc')
            ->get();

        // Check filter
        if($filteredIncomes->isEmpty()){
            // No data found, set a message
            $data['noDataMessage'] = "No data found for the selected year and month.";
        }else{

            $incomesTotal = $filteredIncomes->sum('amount');

            // Group the filtered incomes by income category
            $groupedIncoems = $filteredIncomes->groupBy('income_category_id');

            $incomesSummary = [];

            foreach($groupedIncoems as $incomeCategoryId => $incomes){
                    $incomeCategory = $incomes->first()->income_category->name;
                    $incomesSummary[$incomeCategory] = [
                        'name' => $incomeCategory,
                        'amount' => $incomes->sum('amount'),
                    ];

            }

            $data = [
                'incomesTotal' => $incomesTotal,
                'selectedMonth' => $month,
                'months' => $months,
                'selectedYear' => $year,
                'years' => $years,

                'filteredIncomes' => $filteredIncomes,
                'incomesSummary' => $incomesSummary,

            ];

        }


        return view('admin.reports.monthly.monthly_report',$data);


    }

    public function get_yearly(){
        // Get the authenticate user
        $user = auth()->user();

        $year = request()->query('y', Carbon::now()->year);

        // Calculate the starting and ending dates of the selected year
        $from = Carbon::create($year, 1, 1)->startOfMonth();
        $to = Carbon::create($year, 12, 1)->endOfMonth();


        $data['selectedYear'] = $year;

        // From current year to 2000
        $data['years'] = $years = range(Carbon::now()->year, 2000);


        $filteredIncomes = Income::with('income_category')
            ->where(function($query) use ($user){
                if(Qs::userIsAdmin()){

                }elseif(Qs::userIsParent()){
                    $query->where('created_by_id',$user->id)
                        ->orWhereIn('created_by_id',$user->children->pluck('id'));
                }else{
                    $query->where('created_by_id',$user->id);
                }
            })
            ->whereBetween('entry_date', [$from, $to])
            ->whereNotNull('income_category_id')
            ->orderBy('amount', 'desc')
            ->get();

        // Check filter
        if($filteredIncomes->isEmpty()){
            // No data found, set a message
            $data['noDataMessage'] = "No data found for the selected year.";
        }else{

            $incomesTotal = $filteredIncomes->sum('amount');

            // Group the filtered incomes by income category
            $groupedIncoems = $filteredIncomes->groupBy('income_category_id');

            $incomesSummary = [];

            foreach($groupedIncoems as $incomeCategoryId => $incomes){
                    $incomeCategory = $incomes->first()->income_category->name;
                    $incomesSummary[$incomeCategory] = [
                        'name' => $incomeCategory,
                        'amount' => $incomes->sum('amount'),
                    ];

            }

            $data = [
                'incomesTotal' => $incomesTotal,
                'selectedYear' => $year,
                'years' => $years,

                'filteredIncomes' => $filteredIncomes,
                'incomesSummary' => $incomesSummary,

            ];

        }


        return view('admin.reports.yearly.yearly_report',$data);


    }
}
