@extends ('layouts.app')

@section('content')

<div class="container-fliud">
    <div class="container-fliud">
        <div class="row">
             <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <p class="card-category">Number of Contacts to recieve message<br><br></p>
                        <h3 class="card-title">{{ $count }}</h3>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-dollar fa-2x"></i>
                        </div>
                        <p class="card-category">Approx Cost<br><br></p>
                        <h3 class="card-title">${{ number_format($total,2) }}</h3>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <h2 class="text-center">Send SMS Notification</h2>
                    <p class="text-center">Please note a password is required for this function</p>
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                            <h4 class="card-title">Enter Message</h4>
                        </div>
                    </div>
                    {!! Form::open(array('action' => ['NotificationController@sms'],'method'=>'POST', 'class'=>'form-horizontal')) !!}
                    <div class = "card-body">
                        @if (count($errors)>0)
                            <div class = "alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class = "row">
                            <label class = "col-sm-2 col-form-label">Message: </label>
                            <div class = "col-sm-6">
                                <div class = "form-group">
                                    <input type = "text" class = "form-control" maxlength="160" name="message">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "card-footer">
                        <div class = "row">
                            <div class = "col-md-4">
                                <div class="pull-left">
                                        <a href="{{action('HomeController@index')}}" class = "btn btn-danger">Cancel</a>
                                </div>
                            </div>
                            <div class ="col-md-4">
                                <button type="submit" class="btn btn-success">Send SMS Notification</button>
                            </div>
                        </div>
                    </div>
                    {!!Form::close()!!}


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

