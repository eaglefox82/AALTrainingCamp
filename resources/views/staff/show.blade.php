@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title font-weight-bold">Staff Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>First Name:</th>
                                <td style="border-top: 1px #ddd solid">{{$staff->firstName}}</td>
                                <th>Last Name:</th>
                                <td style="border-top: 1px #ddd solid">{{$staff->lastName}}</td>
                                <th>Role:</th>
                                <td style="border-top: 1px #ddd solid">{{$staff->role}}</td>
                            </tr>
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
                                    @foreach($staff->CampNotes as $s)
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




    <div class="modal fade" id="addnoteModal" tabindex="-1" role="dialog" aria-labelledby="NewRollLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addnoteModal">Add a Note for {{$staff->firstName}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!!Form::open(array('action' => ['StaffController@addNote'], 'method'=>'POST', 'class'=>'form-horizontal'))!!}
                <div class="modal-body">
                    <input type="hidden" name="certNo" value="{{$staff->certNo}}">
                    <input type="hidden" name="id" value="{{$staff->id}}">

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
