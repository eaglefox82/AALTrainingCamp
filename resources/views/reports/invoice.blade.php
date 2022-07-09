<html>
<head>
    <style>
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="text-center">
    <img src="{{url('aal_logo.jpg')}}" height="90" class="text-center">
</div>
<h1 style="text-align: center">Tax Invoice</h1>
<table style="width: 100%;">
    <tr>
        <td style="width: 50%;">
            <p style="font-weight: bold">From:</p>
            Australian Air League Inc.<br>
            Camden Air Activities Center<br>
            Aerodrome Rd, Camden Airport<br>
            Phone: (02) 4655 7721<br>
            ABN: 76 782 683 101<br>
        </td>
        <td style="width: 50%; vertical-align: top">
            <p style="font-weight: bold">To:</p>
            {{$student->firstName}} {{$student->lastName}}<br>
            {{$student->address}}<br>
        </td>
    </tr>
</table>
<br>
<h4 style="display:inline">Requested Hours: {{ $student-> hoursRequested }}</h4><br>
<h4 style="display:inline">Actual Hours: {{ $student->Flights->sum('hours') }}</h4><br>
<h4 style="display:inline">Percentage of Requested Hours: {{ number_format(($student->Flights->sum('hours')/$student-> hoursRequested) * 100,2) }}%</h4>
<br>
<h3>Flights</h3>
<table style="width: 100%;">
    <tr>
        <th class="text-center">FAS No.</th>
        <th class="text-center">Date</th>
        <th class="text-center">Aircraft</th>
        <th class="text-center">Lesson</th>
        <th class="text-center">Instructor</th>
        <th class="text-center">Hours</th>
        <th class="text-center">Cost</th>
    </tr>
    @php
        $flightTotal = 0;
        $hours = 0;
    @endphp
    @foreach($student->Flights as $f)
        @php
            $flightTotal += $f->flightTotal;
            $hours += $f->hours;
        @endphp
        <tr>
            <td class="text-center">{{$f->fas}}</td>
            <td class="text-center">{{date('j/n/Y', strtotime($f->flightDate))}}</td>
            <td class="text-center">{{$f->Aircraft->registration}}</td>
            <td class="text-center">{{$f->Lesson->lesson}}</td>
            <td class="text-center">{{$f->Instructor->firstName}} {{$f->Instructor->lastName}}</td>
            <td class="text-center">{{$f->hours}}</td>
            <td class="text-center">${{$f->flightTotal}}</td>
        </tr>
    @endforeach
    <tr>
        <th colspan="5" style="text-align: right">
            Totals:
        </th>
        <th class="text-center">{{number_format($hours, 1)}}</th>
        <th class="text-center">${{number_format($flightTotal, 2)}}</th>
    </tr>
</table>
<h3>Additional Items</h3>
<table style="width: 100%">
    <tr>
        <th class="text-center">Item</th>
        <th class="text-center">Amount</th>
        <th class="text-center">Paid</th>
    </tr>
    @php
        $additionalTotal = 0;
    @endphp
    @foreach($student->AdditionalItems as $item)
        @php
            $additionalTotal += $item->amount;
        @endphp
    <tr>
        <td class="text-center">{{$item->name}}</td>
        <td class="text-center">${{$item->amount}}</td>
        <td class="text-center">
            @if($item->paid == 1)
                Yes
            @else
                No
            @endif
        </td>
    </tr>
    @endforeach
    <tr>
        <th style="text-align: right">
            Totals:
        </th>
        <th class="text-center">${{number_format($additionalTotal, 2)}}</th>
    </tr>
</table>
<h3>Payments</h3>
<table style="width: 100%">
    <tr>
        <th class="text-center">Date</th>
        <th class="text-center">Item</th>
        <th class="text-center">Method</th>
        <th class="text-center">Amount</th>
    </tr>
    @php
        $payments = 0;
    @endphp
    @foreach($student->Payments as $item)
        @php
            $payments += $item->amount;
        @endphp
        <tr>
            <td class="text-center">{{date('j/n/Y', strtotime($item->paymentDate))}}</td>
            <td class="text-center">{{$item->Item->name}}</td>
            <td class="text-center">{{$item->method}}</td>
            <td class="text-center">${{$item->amount}}</td>
        </tr>
    @endforeach
    <tr>
        <th colspan="3" style="text-align: right">
            Totals:
        </th>
        <th class="text-center">${{number_format($payments, 2)}}</th>
    </tr>
</table>
<br>
<p class="text-center">Signature: ______________________________    Date: _____/_______/______</p>
<br>
<p class="text-center"><i>Please note that for EFTPOS payments there is a {{ $eftpos*100 }}% surcharge</i></p>
</body>
</html>

