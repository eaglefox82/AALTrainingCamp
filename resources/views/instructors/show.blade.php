@extends('layouts.app')

@section('content')

<div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title font-weight-bold">Instructor Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>First Name:</th>
                                <td style="border-top: 1px #ddd solid"></td>
                                <th>Last Name:</th>
                                <td style="border-top: 1px #ddd solid"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class = "row">
            <div class = "col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <h4 class="card-title font-weight-bold">Instuctor Timetable>
                    </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Period</th>
                                    <th>Lesson</th>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>


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
                                   
                                    <tr>
                                        <td></td>
                                        <td class="text-center"></td>
                                    </tr>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>