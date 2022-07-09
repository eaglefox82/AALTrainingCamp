@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title font-weight-bold">Student Checkout</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(array('action' => ['StudentsController@completeCheckOut', $student->id],'method'=>'POST', 'class'=>'form-horizontal')) !!}
                        <table class="table">
                            <tr>
                                <th>First Name:</th>
                                <td style="border-top: 1px #ddd solid">{{$student->firstName}}</td>
                                <th>Last Name:</th>
                                <td style="border-top: 1px #ddd solid">{{$student->lastName}}</td>
                            </tr>
                            <tr>
                                <th>Hours Requested:</th>
                                <td>
                                    <h4>{{$student->hoursRequested}}</h4>
                                </td>
                                <th>Hours Completed:</th>
                                <td>
                                    <h4>{{$student->HoursFlown()}}</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>% of Hours Completed</th>
                                <td colspan="3">
                                    <h4>{{number_format($student->CompletedHoursPercentage,2)}}%</h4>
                                </td>
                            </tr>
                        </table>

                        <div class="table-responsive">
                            <h3>Flights</h3>
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Date</th>
                                    <th class="text-center">FAS</th>
                                    <th class="text-center">Aircraft</th>
                                    <th class="text-center">Instructor</th>
                                    <th class="text-center">Lesson</th>
                                    <th class="text-center">Hours</th>
                                    <th class="text-center">Landings</th>
                                    <th class="text-center">Flight Total</th>
                                </thead>
                                <tbody>
                                @php
                                    $hrs = 0;
                                    $landings = 0;
                                    $income = 0;
                                @endphp
                                @foreach ($student->Flights as $f)
                                    @php
                                        $hrs += $f->hours;
                                        $landings += $f->landings;
                                        $income += $f->flightTotal;
                                    @endphp
                                    <tr>
                                        <td>{{date('j/n/Y', strtotime($f->flightDate))}}</td>
                                        <td class="text-center">{{$f->fas}}</td>
                                        <td class="text-center"><a href="{{action('AircraftsController@show', $f->Aircraft->id)}}" >{{$f->Aircraft->registration}} ({{$f->Aircraft->type}})</a></td>
                                        <td class="text-center">
                                            @if ($f->Instructor != null)
                                                <a href="{{action('InstructorsController@show', $f->instructor->id)}}" >{{$f->instructor->firstName}} {{$f->instructor->lastName}}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">{{$f->lesson->lesson}}</td>
                                        <td class="text-center">{{$f->hours}}</td>
                                        <td class="text-center">{{$f->landings}}</td>
                                        <td class="text-center">${{number_format($f->flightTotal, 2)}}</td>
                                    </tr>
                                @endforeach
                                <tfooter>
                                    <tr style="font-weight: bold">
                                        <td class="text-right" colspan="5">Totals:</td>
                                        <td class="text-center">{{number_format((float)$hrs, 1)}}</td>
                                        <td class="text-center">{{$landings}}</td>
                                        <td class="text-center">${{number_format($income, 2)}}</td>
                                    </tr>
                                </tfooter>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <h3>Additional Items</h3>
                            <table class="table">
                                <thead class="text-primary">
                                    <th class="text-center">Item</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Paid</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($student->AdditionalItems as $i)
                                    <tr>
                                        <td class="text-center">{{$i->name}}</td>
                                        <td class="text-center">${{$i->amount}}</td>
                                        <td class="text-center">
                                            @if($i->paid == 1)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <h3>Accounts Payable</h3>
                            <h4>Flight Total: ${{number_format($income, 2)}}</h4>
                            <h4>Additional Total: ${{number_format($student->AdditionalItems->where('paid', 0)->sum('amount'), 2)}}</h4>
                            <h4>Remaining Tab: ${{number_format($student->Tabs->sum('amount'),2)}}</h4>
                            <h3> <strong>Total Due: $<a id="total" name="total">{{ number_format($income + $student->AdditionalItems->where('paid', 0)->sum('amount'), 2)}}</a></stong></h3>

                            <table class="table">
                                <thead class="text-primary">
                                    <th class="text-center">Method</th>
                                    <th class="text-center">Amount</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">EFTPOS</td>
                                        <td class="text-center" class="form-control">$ <input type="number" step="0.01" name="eftpos" id="eftpos"></td>
                                        <td class="text-center"><a id="eftposTotal" name="eftpostotal"> ${{ number_format(($income + $student->AdditionalItems->where('paid', 0)->sum('amount'))*(1+$eftpos), 2)}}</a> - Including Surcharge</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Cash</td>
                                         <td class="text-center" class="form-control">$ <input type="number" step="0.01" name="cash" id="cash" onblur="calcaluateEFTPOSTotal()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Cheque</td>
                                         <td class="text-center" class="form-control">$ <input type="number" step="0.01" name="cheque" id="cheque" onblur="calcaluateEFTPOSTotal()"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Scholarship</td>
                                         <td class="text-center" class="form-control">$ <input type="number" step="0.01" name="scholarship" id="scholarship" onblur="calcaluateEFTPOSTotal()"></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer ">
                            <div class="row" style="width: 100%">
                                <div class="col-md-12">
                                    <a href="{{action('StudentsController@index')}}" class="btn btn-fill">Cancel</a>    <button type="submit" class="btn btn-primary">Complete Check-Out</button>    <a href="{{action('StudentsController@index')}}" class="btn btn-warning">Finished</a>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('scripts')
<script>
    function calcaluateEFTPOSTotal() {
        var rate = 0.015;

        let total = 0.0;
        let cash = 0.0;
        let cheque = 0.0;
        let scholarship = 0.0;

        if ($("#total").text() != "")
        {
            total = parseFloat($("#total").text().replace(/[^0-9.-]+/g,""));
        }

        if ($("#cash").val() != "")
        {
            cash = parseFloat($("#cash").val());
        }

        if ($("#cheque").val() != "")
        {
            cheque = parseFloat($("#cheque").val());
        }

        if ($("#scholarship").val() != "")
        {
            scholarship = parseFloat($("#scholarship").val());
        }

        var eftpostotal = (total - (cash + cheque + scholarship)) * (1 + rate);

        $("#eftposTotal").text("$"+eftpostotal.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    }
</script>
@endsection

