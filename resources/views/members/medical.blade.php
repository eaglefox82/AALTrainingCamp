@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">

        <div class = "col-sm-12">
            <div class = "card">
                <div class = "card-header card-header-icon card-header-rose pull-center">
                    <h2 class = "card-title text-center">Members with Medical Requirements</h2>
                </div>

                <div class="table-responsive">
                    <table class = "table table-stripped table-no-boreded table-hover" width = "100%" id="member-table">
                        <thead class = "text-primary">
                            <th class = "text-center">Membership Number</th>
                            <th class = "text-center">First Name</th>
                            <th class = "text-center">Last Name</th>
                            <th class = "text-center">Condition</th>
                            <th class = "text-center">Notes</th>
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
        var table=$('#member-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('getMedical') !!}',
            columns: [
                { data: 'membership', name: 'membership', },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'condition', name: 'condition' },
                { data: 'notes', name: 'notes' },
               // {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        })
    });

</script>


@endsection


