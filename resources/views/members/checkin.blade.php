@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Check-in Member</h4>
                    </div>
                </div>
                {!! Form::open(array('action' => ['MembersController@completeCheckIn', $member->id],'method'=>'POST', 'class'=>'form-horizontal')) !!}
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
                            <label class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <span>
                                        {{$member->first_name}} {{$member->last_name}} ({{$member->unitmap->unit}})
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Flight:</label>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <span>
                                        {{$member->membermap->flight->flight_name}}
                                    </span>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Hut and Room:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <span>
                                        Hut: {{$member->membermap->room->name}} - Room: {{ $member->membermap->room->number }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Band</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <span>
                                        @if($member->band == 'Y')
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <label class="col-sm-2 col-form-label">Camp F17a Received:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="form17">
                                        <option value="0">No</option>
                                        <option value="1" selected>Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{action('MembersController@index')}}" class="btn btn-fill">Cancel</a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Complete Check-in</button>
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

@endsection
