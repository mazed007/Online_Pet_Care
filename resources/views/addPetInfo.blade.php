@extends('layouts.master')
@section('content')

  
  <div class="reservation">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"><br>
                <div class="panel-heading"><u><h1>Add Pet Information</h1></u></div><br>


                      <!--  <div class="main">
                            <img src="{{ asset('images/slide/'. 'reg.jpg')}}" height="400" width="500"/>
                        </div>-->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"  action="addPetInfo">
                        {{ csrf_field() }}
						
						<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Pet Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file"  name="image" value="{{ old('image') }}" >

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
				<!--	&nbsp	<input type="file" name="image"><br><br>-->

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

                        <div class="form-group{{ $errors->has('pet_name') ? ' has-error' : '' }}">
                            <label for="pet_name" class="col-md-4 control-label">pet_name</label>

                            <div class="col-md-6">
                                <input id="pet_name" type="text" class="form-control" name="pet_name" value="{{ old('pet_name') }}" autofocus>

                                @if ($errors->has('pet_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pet_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('pet_owner_name') ? ' has-error' : '' }}">
                            <label for="pet_owner_name" class="col-md-4 control-label">pet_owner_name</label>

                            <div class="col-md-6">
                                <input id="pet_owner_name" type="text" class="form-control" name="pet_owner_name" value="{{ old('pet_owner_name') }}" autofocus>

                                @if ($errors->has('pet_owner_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pet_owner_name') }}</strong>
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