@extends('layouts.app')

@section('content')

<div class = "container-fuild">

    <div class = "row">

        <div class = "col-sm-12">
            <div class = "card">
                <div class = "card-header card-header-icon card-header-rose pull-center">
                    <h2 class = "card-title text-center">Reports</h2>
                </div>
                <div class="table-responsive">
                    <table class = "table table-stripped table-no-boreded table-hover" width = "100%" id="hut-table">
                        <thead class = "text-primary">
                        </thead>
                        <tbody class = "text-center">
                                <tr>
                                    <td>Roll Call Report</td>
                                    <td>Creates Roll Call Sheets</td>
                                    <td>
                                        <a href="{{ action('ReportController@RollCall') }}" title="Run Report" class="btn btn-round btn-success"><i class="fa fa-list-alt"></i></a>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Room Listing Report</td>
                                    <td>Creates Room List Sheets for Duty Staff</td>
                                    <td>
                                        <a href=" {{  action('ReportController@RoomRoll') }}"  title="Run Report" class="btn btn-round btn-success"><i class="fa fa-list-alt"></i></a>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Diet Listing</td>
                                    <td>Creates Diet Requirements list</td>
                                    <td>
                                        <a href=""  title="Run Report" class="btn btn-round btn-gray"><i class="fa fa-list-alt"></i></a>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Medical Report</td>
                                    <td>List all medical notes</td>
                                    <td>
                                        <a href="{{ action('ReportController@MedicalList') }}"  title="Run Report" class="btn btn-round btn-success"><i class="fa fa-list-alt"></i></a>
                                    </td>
                                </tr>
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

</script>


@endsection


