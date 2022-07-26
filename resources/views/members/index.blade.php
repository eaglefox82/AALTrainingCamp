@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">

        <div class = "col-sm-12">
            <a class = "btn btn-round btn-primary pull-right" href="{{ action('MembersController@create') }}" class = "btn btn-primary btn-round" title="Add Member"><i class="fa fa-plus fa-2x"></i>Add Memeber</a>
            <div class = "card">
                <div class = "card-header card-header-icon card-header-rose pull-center">
                    <h2 class = "card-title text-center">Members</h2>
                </div>

                <div class="table-responsive">
                    <table class = "table table-stripped table-no-boreded table-hover" width = "100%" id="member-table">
                        <thead class = "text-primary">
                            <th class = "text-center">Membership Number</th>
                            <th class = "text-center">First Name</th>
                            <th class = "text-center">Last Name</th>
                            <th class = "text-center">Rank</th>
                            <th class = "text-center">Squadron</th>
                            <th class = "text-center">CoY</th>
                            <th class = "text-center">Flight</th>
                            <th class = "text-center">Hut</th>
                            <th class = "text-center">Room</th>
                            <th class = "text-center">Single Day</th>
                            <th class = "text-center">Checked In</th>
                            <th class = "text-center">Action</th>
                        </thead>
                        <tbody class = "text-center">
                        </tbody>
                        <tfooter>
                            <tr></tr>
                        </tfooter>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="modal fade" id="addmemberModel" tabindex="-1" role="dialog" aria-labelledby="NewMemberLabel" aria-hidden="true">
    <div class ="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewMemberLabel">Add Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            { Form::open(array('action' => ['MembersController@store'], 'method'=>'POST', 'class'=>'form-horizontal')) !! }

            <div class="modal-body">
                <label class="label-control">Membership Number:</label>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="label-control" type="text" name="membership_number" placeholder="Membership Number" required>
                        </div>
                    </div>

                <label class="label-control">First Name:</label>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="label-control" type="text" name="first_name" placeholder="First Name" required>
                        </div>
                    </div>

                <label class="label-control">Last Name:</label>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="label-control" type="text" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>

                <label class="label-control">Rank:</label>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="label-control" type="text" name="rank" placeholder="Rank" required>
                        </div>
                    </div>

                <label class="label-control">Squadron:</label>
                    <div class="form-group">
                        <div class="input-group">
                            <select type="text" class="selectpicker" data-sytle="select-with-transition" name="squadron" id="squadronselectBox">
                                <option value = "">Select Squadron</option>
                                @foreach($squadron as $squadron)
                                    <option value = "{{ $squadron->id }}">{{ $squadron->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

            </div>
            <div class = "modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
                <button type="submit" class="btn btn-primary">Save Member</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

@stop

@section ('scripts')

<script>

    $(function() {
        var table=$('#member-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('getMembers') !!}',
            columns: [
                { data: 'membership', name: 'membership', },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'rank', name: 'rank' },
                { data: 'unitmap.unit', name: 'squadron' },
                { data: 'coy', name: 'coy' },
                { data: 'flightname', name: 'flight', null: '' },
                { data: 'hutname', name: 'hut', null: '' },
                { data: 'roomnumber', name: 'room', null: '' },
                { data: 'single_day', name: 'single_day', null:''},
                { data: 'checkedin', name: 'checked_in' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        })
    });

</script>


@endsection


