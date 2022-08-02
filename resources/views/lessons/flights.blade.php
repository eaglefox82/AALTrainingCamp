@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">



<a class = "btn btn-round btn-primary pull-right" href="{{ action('ReportController@RollCall') }}" class = "btn btn-primary btn-round" title="Add Member"><i class="fa fa-plus fa-2x"></i>Print Rolls</a>
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
                            @if($h->member->checked_in == 'Y')
                                <tr>
                                    <td>{{ $h->member->first_name }}</td>
                                    <td>{{ $h->member->last_name }}</td>
                                    <td>{{ $h->member->unitmap->unit }}</td>
                                    <td>
                                        '<a href="action('MembersController@show', $h->member_id)" target="_blank" title="View" class="btn btn-round btn-success"><i class="fa fa-info"></i></a>';
                                    </td>
                                </tr>
                            @endif
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


