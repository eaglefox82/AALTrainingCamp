@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Edit Instructor - {{ $instructor->firstName }} {{ $instructor->lastName }}</h4>
                    </div>
                </div>
                {!! Form::open(array('action' => ['InstructorsController@update', $instructor->id],'method'=>'PUT', 'class'=>'form-horizontal')) !!}
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
                        <label class="col-sm-2 col-form-label">Grade:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="grade" value="{{$instructor->grade}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Supervision Required:</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="supervision">
                                    <option value="{{$instructor->supervisonRequired}}" selected hidden>@if($instructor->supervisonRequired == 0) <span>No</span> @else <span>Yes</span> @endif</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Available</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="form-control" name="available">
                                    <option value="{{$instructor->available}}" selected hidden>@if($instructor->available == 0) <span>No</span> @else <span>Yes</span> @endif</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{action('InstructorsController@index')}}" class="btn btn-fill">Cancel</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Update Instuctor</button>
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
