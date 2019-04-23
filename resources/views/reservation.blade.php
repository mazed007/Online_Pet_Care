@extends('layouts.master')
@section('content')

<div class="reservation">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"><br>
                <div class="panel-heading"><u><h1>Seat Reservation</h1></u></div><br>


                      <!--  <div class="main">
                            <img src="{{ asset('images/slide/'. 'reg.jpg')}}" height="400" width="500"/>
                        </div>-->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('pet_type') ? ' has-error' : '' }}">
                            <label for="pet_type" class="col-md-4 control-label">Pet Type</label>

                            <div class="col-md-6">
                                <input id="pet_type" type="text" class="form-control" name="pet_type" value="{{ old('pet_type') }}" autofocus>

                                @if ($errors->has('pet_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pet_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">phone_number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('start_day') ? ' has-error' : '' }}">
                            <label for="start_day" class="col-md-4 control-label">start_day</label>

                            <div class="col-md-6">
                                <input id="start_day" type="date" class="form-control" name="start_day" value="{{ old('start_day') }}" autofocus>

                                @if ($errors->has('start_day'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('end_day') ? ' has-error' : '' }}">
                            <label for="end_day" class="col-md-4 control-label">end_day</label>

                            <div class="col-md-6">
                                <input id="end_day" type="date" class="form-control" name="end_day" value="{{ old('end_day') }}" autofocus>

                                @if ($errors->has('end_day'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" name="submit" id="submit">
                                
                            </div>
                              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection