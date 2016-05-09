<?php $active="register"; ?>
@extends('layouts.dashboard')
@section('content') 

<section id="register">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ URL::route('register')}}">
                        {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" type="text" name="name" value="{{ old('name') }}"> 
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" type="text" name="username" value="{{ old('username') }}"> 
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop