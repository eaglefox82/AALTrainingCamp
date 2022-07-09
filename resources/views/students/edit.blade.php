@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Edit {{ $student->firstName }} {{ $student->lastName }}</h4>
                    </div>
                </div>
                {!! Form::open(array('action' => ['StudentsController@update', $student->id],'method'=>'PUT', 'class'=>'form-horizontal')) !!}
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
                        <label class="col-sm-2 col-form-label">Squadron:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="squadron" value="{{ $student->squadron }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Requesed Hours:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="hours" value="{{ $student->hoursRequested }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">ARN:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="arn" value="{{ $student->arn }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Form 101:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="form101">
                                    <option value="0" @if ($student->form101 == 0) selected @endif>No</option>
                                    <option value="1" @if ($student->form101 == 1) selected @endif>Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <label class="col-sm-2 col-form-label">Medical:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="medical">
                                    <option value="0" @if ($student->medical == 0) selected @endif>No</option>
                                    <option value="1" @if ($student->medical == 1) selected @endif>Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">English:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="english">
                                    <option value="0" @if ($student->english == 0) selected @endif>No</option>
                                    <option value="1" @if ($student->english == 1) selected @endif>Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Requested Aircraft:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="aircraftType">
                                    <option value="C152" @if ($student->aircraftType == 'C152') selected @endif>C152</option>
                                    <option value="C172" @if ($student->aircraftType == 'C172') selected @endif>C172</option>
                                    <option value="PA28" @if ($student->aircraftType == 'PA28') selected @endif>PA28</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{action('AccountingController@index')}}" class="btn btn-fill">Cancel</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Update Student</button>
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
