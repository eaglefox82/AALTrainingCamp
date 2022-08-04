@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Add Medical for {{ $member->first_name }} {{ $member->last_name }}</h4>
                    </div>
                </div>
                {!! Form::open(array('action' => ['MembersController@addMemberMedical', $member->id],'method'=>'POST', 'class'=>'form-horizontal')) !!}
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
                            <label class="col-sm-2 col-form-label" hidden="hidden">Member ID</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                     <Input type="text" class="form-control" hidden="hidden" name="id" value="{{ $member->id }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Condition:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <Input type="text" class="form-control" name="condition" value="" required>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <label class="col-sm-2 col-form-label">Notes:</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <Input type="text" class="form-control" name="notes" value="">
                                </div>
                            </div>
                        </div>


                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{action('MembersController@index')}}" class="btn btn-fill">Cancel</a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add Diet Note</button>
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
