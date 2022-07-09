<html>
<head>
    <style>
        .text-center {
            text-align: center;
        }
        @page {
            margin: 100px 25px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<div class="text-center">
    <img src="{{url('aal_logo.jpg')}}" height="90" class="text-center">
</div>
<h1 style="text-align: center">Camp Report</h1>
<h2 style="text-align: center">Group Flying Camp {{ $campYear }}</h2>

<h2 style="text-align: center">Camp Finance Overview</h2>
<br><br>

<h3 class="text-center">
    <table style=width:100%>
        <tr>
            <th>Total Income:</th>
            <th>Total Expenses:</th>
            <th>Total Balance:</th>
        </tr>
        <tr>
            <td class="text-center">${{ number_format($totalIncome,2) }}</td>
            <td class="text-center">${{ number_format($totalExpenses,2) }}</td>
            <td class="text-center">${{ number_format($totalBalance,2) }}</td>
    </table>
 </h3>
<br>
<br>
<h2 class="text-center">Flight Report</h2>

<div = class="text-center">
    <table style=width:100%>
        <tr>
            <th>Flight Income:</th>
            <th>Fuel Costs:</th>
            <th>Movement Fees:</th>
            <th>Total Balance:</th>
        </tr>
        <tr>
            <td class="text-center"> ${{ number_format($flightincome,2) }}</td>
            <td class="text-center">${{ number_format($fuelexpense,2) }}</td>
            <td class="text-center">${{ number_format($movementexpense,2) }}</td>
            <td class="text-center">${{ number_format($totalBalance,2) }}</td>
    </table>
</div>

<h3 class="text-center">Aircraft Flights</h3>
<table style="width: 100%">
    <tr>
        <th>Aircraft</th>
        <th>Fligh Hours</th>
        <th>Total Landings</th>
        <th>Total Full Stop</th>
        <th>Total Income</th>
        <th>No of Flights</th>
    </tr>
    <tbody>
    @foreach($aircraft as $a)
        <tr>
            <td class="text-center">{{$a->Aircraft->registration}}</td>
            <td class="text-center">{{$a->flightHours}}</td>
            <td class="text-center">{{$a->landings}}</td>
            <td class="text-center">{{$a->fullstopLandings}}</td>
            <td class="text-center">${{$a->flightTotal}}</td>
            <td class="text-center">{{$a->flightCount}}</td>
        </tr>
    @endforeach

        <tr >
            <td class="text-center" style="font-weight: bold">Total</td>
            <td class="text-center" style="font-weight: bold">{{$aircraft->sum('flightHours')}}</td>
            <td class="text-center" style="font-weight: bold">{{$aircraft->sum('landings')}}</td>
            <td class="text-center" style="font-weight: bold">{{$aircraft->sum('fullstopLandings')}}</td>
            <td class="text-center" style="font-weight: bold">${{$aircraft->sum('flightTotal')}}</td>
            <td class="text-center" style="font-weight: bold">{{number_format($aircraft->sum('flightCount'),2)}}</td>
        </tr>
    </tbody>
</table>
<br>
<br>

<h3 style="text-align: center">Aircraft Fuel Costs</h3>
<table style="width: 100%"">
    <tr>
        <th>Aircraft</th>
        <th>Fuel Amount</th>
        <th>Fuel Cost</th>
    </tr>
    <tbody>
    @foreach($fuelCost as $f)
        <tr>
            <td class="text-center">{{$f->Aircraft->registration}}</td>
            <td class="text-center">{{$f->fuelAmount}} liters</td>
            <td class="text-center">${{$f->fuelCost}}</td>
        </tr>
    @endforeach
       <tr>
           <td class="text-center" style="font-weight: bold">Total</td>
           <td class="text-center" style="font-weight: bold">{{ $fuelCost->sum('fuelAmount') }} liters</td>
           <td class="text-center" style="font-weight: bold">{{ number_format($fuelCost->sum('fuelCost'),2) }}</td>
</table>



<!-- Force Page Break -->
<div style="page-break-after: always;"></div>

<h2 style="text-align: center">Camp Finance</h2>

<table style="width: 100%">
    <tr>
        <th>Camp Income:</th>
        <th>Camp Expenses:</th>
        <th>Camp Balance:</th>
    </tr>
    <tbody>
        <tr>
            <td class="text-center">${{ number_format($campincome,2) }}</td>
            <td class="text-center">${{ number_format($campExpenses,2) }}</td>
            <td class="text-center">${{ number_format($campBalance,2) }}</td>
        </tr>
    </tbody>
</table>
<br>
<br>
<h2 style="text-align: center">Camp Expenses Summary</h2>
<table style="width: 100%">
    <tr>
        <th>Description</th>
        <th>Total Amount:</th>
        <th>Avg/Day</th>
    </tr>
    <tbody>
        @foreach($campExp as $c)
            <tr>
                <td class="text-center">{{$c->ExpenseMapping->expense_type}}</td>
                <td class="text-center">${{ number_format($c->expenseAmount,2) }}</td>
                <td class="text-center">${{number_format($c->expenseAmount/$campDays,2)}}</td>
            </tr>
            @endforeach
            <tr>
                <td class="text-center" style="font-weight: bold">Total</td>
                <td class="text-center" style="font-weight: bold">${{ number_format($campExp->sum('expenseAmount'),2) }}</td>
                <td class="text-center" style="font-weight: bold">${{ number_format($campExp->sum('expenseAmount')/$campDays,2) }}</td>
    </tbody>
</table>

<footer>
<small>Date of report: {{date('l jS F Y', strtotime($timestamp))}} - created by {{ $user->firstname }} {{ $user->lastname }}</small>
</footer>

</body>
</html>



