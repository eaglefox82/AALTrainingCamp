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
                    <table class = "table table-stripped table-no-boreded table-hover" width = "100%" id="hut-table">
                        <thead class = "text-primary">
                            <th class = "text-center">Cabin Name</th>
                            <th class = "text-center">Room Number</th>
                            <th class = "text-center">Max Beds</th>
                            <th class = "text-center">Allocated Beds</th>
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



@stop

@section ('scripts')

<script>

    $(function() {
        var table=$('#hut-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('getHuts') !!}',
            columns: [
                { data: 'name', name: 'name', },
                { data: 'number', name: 'number' },
                { data: 'beds', name: 'beds' },
                { data: 'count', name: 'count' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        })
    });

</script>


@endsection


