@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center"> Australian Air League NSW Group Training Camp - {{ $camp[0]->year }}</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome {{ $user->firstname }} {{ $user->lastname }}</div>
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-university fa-2x"></i>
                        </div>
                        <p class="card-category">Number in Camp<br><br></p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-fighter-jet fa-2x"></i>
                        </div>
                        <p class="card-category">Total Registered<br><br></p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-plane fa-2x"></i>
                        </div>
                        <p class="card-category">Total Males<br><br></p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-anchor fa-2x"></i>
                        </div>
                        <p class="card-category">Total Females<br><br></p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-money fa-2x"></i>
                        </div>
                        <p class="card-category">Camp Attendance Rate<br><br></p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
