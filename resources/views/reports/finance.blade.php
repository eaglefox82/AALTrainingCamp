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
<h1 style="text-align: center">Finance Report</h1>
<h2 style="text-align: center">Group Flying Camp {{ $campYear }}</h2>

<br><br>

<h3 style="text-align: center">Camp Summary</h3>

<table style="width: 100%">
    <tr>
        <th>Camp Fees:</th>
        <th>Return an Earn</th>
        <th>Total Expenses</th>
        <th>Balance</th>
    </tr>
    <tr>
        <td class="text-center">${{number_format((float)$campfees, 2)}}</td>
        <td class="text-center">${{number_format((float)$returnEarn, 2)}}</td>
        <td class="text-center">${{number_format((float)$totalExpenses, 2)}}</td>
        <td class="text-center">${{number_format((float)$campBalance,2)}}</td>
    </tr>
</table>
<br><br>

<h3 style="text-align: center">Expense Summary</h3>
<table style="width: 100%">
    <tr>
        <th>Expense type</th>
        <th>Amount</th>
        <th>Avg/Day</th>
    </tr>
    @foreach($campExp as $c)
        <tr>
            <td class="text-center">{{$c->ExpenseMapping->expense_type}}</td>
            <td class="text-center">${{ number_format($c->expenseAmount,2) }}</td>
            <td class="text-center">${{number_format($c->expenseAmount/$campDays,2)}}</td>
        </tr>
    @endforeach
        <tr>
            <td style="text-align: center; font-weight: bold">Totals</td>
            <td style="text-align: center; font-weight: bold">${{number_format((float)$campExp->sum('expenseAmount'), 2)}}</td>
            <td style="text-align: center; font-weight: bold">${{number_format((float)$campExp->sum('expenseAmount')/$campDays, 2)}}</td>
        </tr>
</table>
<br>
<br>

<h3 style="text-align: center">Expense List</h3>
<table style="width: 100%;">
    <tr>
        <th>Date</th>
        <th>Details</th>
        <th>Catergory</th>
        <th class="text-center">Submitted By</th>
        <th class="text-center">Amount</th>
    </tr>
    <tbody>
    @foreach($data as $e)
        <tr>
            <td class="text-center">
                {{date('j/n/Y', strtotime($e->expenseDate))}}
            </td>
            <td class="text-center">{{$e->details}}</td>
            <td class="text-center">{{$e->ExpenseMapping->expense_type}}</td>
            <td class="text-center">{{$e->submittedName}}</td>
            <td class="text-center">${{$e->amount}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<footer>
<small>Date of report: {{date('l jS F Y', strtotime($timestamp))}} - created by {{ $user->firstname }} {{ $user->lastname }}</small>
</footer>
</body>
</html>

