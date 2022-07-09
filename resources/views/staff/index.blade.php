@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if(session()->has('success'))
            <div class="row">
                <div class="alert alert-success" role="alert">
                    <strong>{{session()->get('success')}}</strong>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title ">Staff - In Camp: {{$staff->count()}}</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-round btn-primary pull-right" data-toggle="modal" data-target="#addstaffModal" class="btn btn-primary btn-round" title="Add Camp Staff"><i class="fa fa-plus fa-2x"></i> Add Camp Staff</button>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th></th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th class="text-center">Role</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($staff as $s)
                                        <tr>
                                            <td class="text-center">
                                                <a href="{{action('StaffController@show', $s->id)}}" title="View" class="btn btn-success"><i class="fa fa-info"></i></a>
                                            </td>
                                            <td>{{$s->firstName}}</td>
                                            <td>{{$s->lastName}}</td>
                                            <td class="text-center">{{$s->role}}</td>
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

    <div class="modal fade" id="addstaffModal" tabindex="-1" role="dialog" aria-labelledby="NewStaffLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addnoteModal">Add Camp Staff</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!!Form::open(array('action' => ['StaffController@store'], 'method'=>'POST', 'class'=>'form-horizontal'))!!}
                <div class="modal-body">

                    <label class="label-control">First Name:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="firstName" value="">
                    </div>

                    <label class="label-control">Last Name:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lastName" value="">
                    </div>

                    <label class="label-control">Membership Number:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="certNo" value="">
                    </div>

                    <label class="label-control">Camp Role</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="role" value="">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-round btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-round btn-primary">Save Staff</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection
