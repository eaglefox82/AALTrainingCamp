@extends('layouts.report')

@section('content')
   <h2 class="text-center">Air Activities Flying Camp Report</h2>


   <h4>Total Income: $</h4>
   <h4>Total Expense: $</h4>
   <h4>Diffence: $</h4>

    <h3>Flight Operations</h3>

    <h4>Total Flight Income: $</h4>
    <h4>Total Flight Hours: </h4>

    <h3>Summary by Aircraft</h4>

    <div class="table-responsive">
        <table border="1" class="table" align="center">
            <thead class="text-primary">
                <tr>
                    <th class="text-center">Aircraft</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Fight Hours</th>
                    <th class="text-center">Flight Income</th>
                    <th class="text-center">Fuel Cost</th>
                    <th class="text-center">Movement Costs</th>
                    <th class="text-center">Maintaince Costs</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <div style="clear:both;">
        </div>

<h3>Camp Operations:</h3>

<h4>Camp Income: $</h4>
<h4>Camp Expense: $</h4>
<h4>Diffence: $</h4>

<h4>Avg Food Cost per Day: $<h4>
<h4>Outing Costs: $</h4>

<h4>Camp Fee Income: $</h4>
<h4>Return and Earn Income: $</h4>

<div class="table-responsive">
    <table border="1" class="table" align="center">
        <thead class="text-primary">
          <tr>
            <th class="text-center">Expense Type</th>
            <th class="text-center">Total</th>

          </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
