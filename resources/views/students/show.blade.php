@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title font-weight-bold">Student Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="pull-right new-button">
                            <a href="{{action('StudentsController@edit', $student->id)}}" class="btn btn-primary" title="Add Student"><i
                                        class="fa fa-plus fa-2x"></i> Edit Student</a>
                        </div>

                        <table class="table">
                            <tr>
                                <th>First Name:</th>
                                <td style="border-top: 1px #ddd solid">{{$student->firstName}}</td>
                                <th>Last Name:</th>
                                <td style="border-top: 1px #ddd solid">{{$student->lastName}}</td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td>{{$student->age}} years</td>
                                <th>Unit:</th>
                                <td>{{$student->squadron}}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>
                                    {{$student->email}}
                                </td>
                                <th>Address:</th>
                                <td>
                                    {{$student->address}}
                                </td>
                            </tr>
                            <tr>
                                <th>ARN:</th>
                                <td>{{$student->arn}}</td>
                                <th>Aircraft Type:</th>
                                <td>{{$student->aircraftType}}</td>
                            </tr>

                                <th>Notes:</th>
                                <td>
                                    {{$student->notes}}
                                </td>
                                <th>Instructor:</th>
                                <td>
                                    <h4>{{$student->instructor}}</h4> <!-- B. Fox adding requested instructor field -->
                                </td>
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
                                <td>
                                    <h4>{{number_format($student->CompletedHoursPercentage,2)}}%<h4>
                                </td>
                                <th>Form 101 provided:</th>
                                <td>
                                    @if($student->form101 == 0)
                                        <strong style="color:red">No</strong>
                                    @else
                                        Yes
                                    @endif
                        </table>

                        <div class="table-responsive">
                            <h3>Flights</h3>
                            <table class="table">
                                <thead class="text-primary">
                                    <th></th>
                                    <th>Date</th>
                                    <th class="text-center">FAS</th>
                                    <th class="text-center">Aircraft</th>
                                    <th class="text-center">Instructor</th>
                                    <th class="text-center">Lesson</th>
                                    <th class="text-center">Hours</th>
                                    <th class="text-center">Landings</th>
                                    <th class="text-center">Flight Total</th>
                                    <th></th>
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
                                        <td class="text-center">
                                            <a href="{{action('FlightsController@show', $f->id)}}" title="View" class="btn btn-success"><i class="fa fa-info"></i></a>
                                        </td>
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
                                        <td>
                                            <a href="{{action('FlightsController@edit', $f->id)}}" class="btn btn-info" title="Edit Flight"><i class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tfooter>
                                    <tr style="font-weight: bold">
                                        <td class="text-right" colspan="6">Totals:</td>
                                        <td class="text-center">{{number_format((float)$hrs, 1)}}</td>
                                        <td class="text-center">{{$landings}}</td>
                                        <td class="text-center">${{number_format($income, 2)}}</td>
                                        <td></td>
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
                            <h3>Account Payments</h3>
                            <table class="table">
                                <thead class="text-primary">
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Item</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Method</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($student->Payments as $p)
                                    <tr>
                                        <td class="text-center">{{date('j/n/Y', strtotime($p->paymentDate))}}</td>
                                        <td class="text-center">{{$p->Item->name}}</td>
                                        <td class="text-center">${{$p->amount}}</td>
                                        <td class="text-center">{{$p->method}}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <h3>Canteen Tab - Balance ${{number_format($student->Tabs->sum('amount'),2)}}</h3>
                            <div class="pull-right new-button">
                                <a href="{{action('TabsController@createtab', $student->id)}}" class="btn btn-primary" title="Add Tab Record"><i
                                            class="fa fa-plus fa-2x"></i> Add Tab Record</a>
                            </div>
                            <table class="table">
                                <thead class="text-primary">
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Amount</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                  @foreach ($student->Tabs as $t)
                                    <tr>
                                        <td class="text-center">{{date('j/n/Y', strtotime($t->created_at))}}</td>
                                        <td class="text-center">${{$t->amount}}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="table-responsive">
                                <table class="table">
                                    <div class="pull-left">
                                        <h3>Notes</h3>
                                    </div>
                                    <button class="btn btn-round btn-primary pull-right" data-toggle="modal" data-target="#addnoteModal" class="btn btn-primary btn-round" title="Add Note"><i class="fa fa-plus fa-2x"></i> Add Note</button>
                                    <thead class="text-primary">
                                        <th width=10%>Date</th>
                                        <th class="text-center">Note</th>
                                    </thead>
                                    <tbody>
                                        @foreach($student->CampNotes as $s)
                                        <tr>
                                            <td>{{date('j/n/Y', strtotime($s->created_at))}}</td>
                                            <td class="text-center">{{$s->note}}</td>
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


    <div class="modal fade" id="addnoteModal" tabindex="-1" role="dialog" aria-labelledby="NewRollLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addnoteModal">Add a Note for {{$student->firstName}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!!Form::open(array('action' => ['StudentsController@addNotes'], 'method'=>'POST', 'class'=>'form-horizontal'))!!}
                <div class="modal-body">
                    <input type="hidden" name="certNo" value="{{$student->certNo}}">
                    <input type="hidden" name="id" value="{{$student->id}}">

                    <label class="label-control">Note:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="note" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-round btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-round btn-primary">Save Note</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>

@endsection
