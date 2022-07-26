@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Add Member</h4>
                    </div>
                </div>
                {!! Form::open(array('action' => ['MembersController@store'],'method'=>'POST', 'class'=>'form-horizontal')) !!}
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
                            <label class="col-sm-2 col-form-label">Membership:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <Input type="text" class="form-control" name="membership" value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">First Name:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <Input type="text" class="form-control" name="firstname" value="" required>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <label class="col-sm-2 col-form-label">Last Name:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <Input type="text" class="form-control" name="lastname" value="" required>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <label class="col-sm-2 col-form-label">Rank:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <Input type="text" class="form-control" name="rank" value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Squadron:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" class="selectpicker" data-sytle="select-with-transition" name="squadron">
                                        <option disabled selected value> -- select an option -- </option>
                                        @foreach ($unit as $u)
                                            <option value="{{$u->id}}">{{$u->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Gender:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="gender">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Band:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="band">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="N">No</option>
                                        <option value="Y">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Single Day:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="singleday">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="N">No</option>
                                        <option value="Y">Yes</option>
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
                                    <button type="submit" class="btn btn-primary">Add Member</button>
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
