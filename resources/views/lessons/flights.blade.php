@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">

    @foreach ($names as $name)
        <div class = "col-sm-12">
            <div class = "card">
                <div class = "card-header card-header-icon card-header-rose pull-center">
                    <h2 class = "card-title text-center">{{ $name->flight_name }}</h2>
                </div>

                <div class="table-responsive">
                    <table class = "table table-stripped table-no-boreded table-hover" width = "100%" id="hut-table">
                        <thead class = "text-primary">
                            <th class = "text-center">First Name</th>
                            <th class = "text-center">Last Name</th>
                            <th class = "text-center">Squadron</th>
                            <th class = "text-center">Action</th>
                        </thead>
                        <tbody class = "text-center">
                            @foreach ($flights->where('flight_id', $name->id) as $h)
                                <tr>
                                    <td>{{ $h->member->first_name }}</td>
                                    <td>{{ $h->member->last_name }}</td>
                                    <td>{{ $h->member->unitmap->unit }}</td>
                                    <td>
                                        '<a href="action('MembersController@show', $h->member_id)" target="_blank" title="View" class="btn btn-round btn-success"><i class="fa fa-info"></i></a>';
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfooter>
                            <tr></tr>
                        </tfooter>
                    </table>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>



@stop

@section ('scripts')

<script>

</script>


@endsection


