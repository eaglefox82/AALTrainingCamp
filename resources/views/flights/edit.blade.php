@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Edit Flight</h4>
                    </div>
                </div>
                {!! Form::open(array('action' => ['FlightsController@update', $flight->id],'method'=>'PUT', 'class'=>'form-horizontal')) !!}
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <label class="col-sm-2 col-form-label">FAS #:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fas" value="{{ $flight->fas }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Date:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" value="{{Carbon\Carbon::parse($flight->flightDate)->toDateString()}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Student:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select name="student" class="form-control">
                                    <option value="{{ $flight->studentID }}" selected hidden>{{ $flight->student->firstName }} {{ $flight->student->lastName }}</option>
                                    @foreach($students as $i)
                                        <option value="{{$i->id}}">{{$i->firstName}} {{$i->lastName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Instructor:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select name="instructor" class="form-control">
                                    @if($flight->instructorID != 0)
                                        <option value="{{ $flight->instructorID }}" selected hidden>{{ $flight->Instructor->firstName }} {{ $flight->Instructor->lastName }}</option>
                                    @else
                                        <option value="0" selected hidden>Student Solo</option>
                                    @endif
                                    @foreach($instructors as $i)
                                        <option value="{{$i->id}}">{{$i->firstName}} {{$i->lastName}}</option>
                                    @endforeach
                                    <option value="0">Student Solo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Aircraft:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select id="aircraft" name="aircraft" class="form-control" onblur="calcaluateFlightTotal()">
                                    <option value="{{ $flight->aircraftID }}" selected hidden>{{ $flight->aircraft->registration }}</option>
                                    @foreach($aircraft as $i)
                                        <option value="{{$i->id}}" price="{{$i->rate}}">{{$i->registration}} ({{$i->type}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">VDO Time:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input id="flightHours" type="number" class="form-control" name="hours" step="0.1" value="{{ $flight->hours }}" onblur="calcaluateFlightTotal()">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Landings:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="number" class="form-control" name="landings" step="1" value="{{ $flight->landings }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Full Stop Landings:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input id="fullstopLandings" type="number" class="form-control" name="fullStop" step="1" value="{{ $flight->fullstopLandings }}" onblur="calcaluateFlightTotal()">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Lesson:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select id="lesson" name="lesson" class="form-control">
                                    <option value="{{ $flight->lessonID }}" selected hidden>{{ $flight->lesson->lesson }}</option>
                                    @foreach($lesson as $i)
                                        <option value="{{$i->id}}">{{$i->lesson}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Notes:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="notes" value="{{ $flight->notes }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Flight Total: $</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input id="flightTotal" type="number" class="form-control" name="flightTotal" step="0.01" value="{{ $flight->flightTotal }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Paid:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="paid">
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{action('FlightsController@index')}}" class="btn btn-fill">Cancel</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Edit Flight Record</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section ('scripts')
<script>
    function calcaluateFlightTotal() {
        var hours = 0.0;
        var rate = 0.0;
        var landings = 0;
        var landingCost = 33.0;

        if ($("#aircraft").children("option:selected").attr("price") != "")
        {
            rate = $("#aircraft").children("option:selected").attr("price");
        }

        if ($("#flightHours").val() != "")
        {
            hours = $("#flightHours").val();
        }

        if ($("#fullstopLandings").val() != "")
        {
            landings = parseInt($("#fullstopLandings").val());
        }

        var total = (hours * rate) + (landings * landingCost);

        $("#flightTotal").val(total.toFixed(2));
    }
</script>
@endsection
