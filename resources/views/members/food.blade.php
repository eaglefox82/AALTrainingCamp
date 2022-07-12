@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">

        <div class = "col-sm-12">

            <div class = "card">
                <div class = "card-header card-header-icon card-header-rose pull-center">
                    <h2 class = "card-title text-center">Members with Food Requirements</h2>
                </div>

                <div class="table-responsive">
                    <table class = "table table-stripped table-no-boreded table-hover" width = "100%" id="member-table">
                        <thead class = "text-primary">
                            <th class = "text-center">Membership Number</th>
                            <th class = "text-center">First Name</th>
                            <th class = "text-center">Last Name</th>
                            <th class = "text-center">Rank</th>
                            <th class = "text-center">Squadron</th>
                            <th class = "text-center">Flight</th>
                            <th class = "text-center">Food</th>
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



@endsection

@section ('scripts')

<script>

    $(function() {
        var table=$('#member-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('getFood') !!}',
            columns: [
                { data: 'member.membership', name: 'membership' },
                { data: 'member.first_name', name: 'first_name' },
                { data: 'member.last_name', name: 'last_name' },
                { data: 'member.rank', name: 'rank' },
                { data: 'unitname', name: 'squadron' },
                { data: 'flightname', name: 'flight' },
                { data: 'food', name: 'food' },

            ]
        })
    });

</script>

@stop


