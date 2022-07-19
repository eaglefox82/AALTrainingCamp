@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">
        <div class = col-sm-12>
            <div class = "card">
                <div class = "card-header card-header-icon card-header-rose pull-center">
                    <h2 class = "card-title text-center">Details for {{ $member->first_name }} {{ $member->last_name }} </h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>First Name:</th>
                        <td style="border-top: 1px #ddd solid">{{ $member->first_name }}</td>
                        <th>Last Name:</th>
                        <td style="border-top: 1px #ddd solid">{{ $member->last_name }}</td>
                        <th>Rank:</th>
                        <td style="border-top: 1px #ddd solid">{{ $member->rank }}</td>
                        <th>Membership:</th>
                        <td style="border-top: 1px #ddd solid">{{ $member->membership }}</td>
                        <th>Squadron:</th>
                        <td style="border-top: 1px #ddd solid">{{ $member->unitmap->unit }}</td>
                    </tr>
                    <tr>
                        <th>Flight:</th>
                        <td style="border-top: 1px #ddd solid">
                            @if($mapping == 'Y')
                                {{ $member->membermap->flight->flight_name }}
                            @else
                                <span class="badge badge-danger">N/A</span>
                            @endif
                        </td>
                        <th>Hut:</th>
                        <td style="border-top: 1px #ddd solid">
                            @if($mapping == 'Y')
                                {{ $member->membermap->room->name }}
                             @else
                                <span class="badge badge-danger">N/A</span>
                            @endif
                        </td>
                        <th>Room:</th>
                         <td style="border-top: 1px #ddd solid">
                            @if($mapping == 'Y')
                                {{ $member->membermap->room->number }}
                             @else
                                 <span class="badge badge-danger">N/A</span>
                            @endif
                        </td>
                        <th>Form 17:</th>
                        <td style="border-top: 1px #ddd solid">
                            @if($member->form17 == 1)
                                <span>Yes</span>
                            @else
                                <span class="badge badge-danger">No</span>
                            @endif
                        </td>
                        <th>Checked In:</th>
                        <td style="border-top: 1px #ddd solid">
                            @if($member->checked_in == 1)
                                <span>Yes</span>
                            @else
                                <span>No</span>
                            @endif
                        </td>
                    </tr>
                </table>
                @if($member->checked_in == 'N')
                    <div class="pull-left new button">
                        <a href="{{ Action('MembersController@memberCheckIn', $member->id) }}" class="btn btn-success btn-round" title="Check In"><i class="fa fa-check fa-2x"></i> Check Member In</a>
                    </div>
                @endif
                <div class="pull-right new-button">
                    <a href="{{ action('MembersController@edit', $member->id) }}" class="btn btn-primary btn-round" title="Edit"><i class="fa fa-edit fa-2x"></i> Edit Member</a>
                    <a href="" data-toggle="modal" data-target="#addmedicalModal" class="btn btn-danger btn-round" title="Add Medical"><i class="fa fa-plus fa-2x"></i> Add Medical</a>
                    <a href="" data-toggle="modal" data-target="#adddietaryModal" class="btn btn-info btn-round" title="Add Dietary"><i class="fa fa-plus fa-2x"></i> Add Dietary</a>
                    <a href="" data-toggle="modal" data-target="#addnotesModal" class="btn btn-warning btn-round" title="Add Notes"><i class="fa fa-plus fa-2x"></i> Add Notes</a>
                </div>
            </div>
        </div>

    </div>
</div>


@stop
