<?php $active="contact_us"; ?>
@extends('layouts.dashboard')
@section('content') 
<section id="contact-page">
    <div class="container">
       
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Drop Your Message</h3>
                    </div>
                    {!! Form::open(['route' => 'contact_us']) !!}
                    <div class="panel-body">
                       
                        {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input class="form-control" name="email" id="email" value="{{ old('email') }}" type="email" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Division *</label>
                                    <input class="form-control" name="division" id="division" value="{{ old('division') }}" type="text" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Subject *</label>
                                    <input class="form-control" name="subject" id="subject" value="{{ old('subject') }}" type="text" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Message *</label>
                                    <input class="form-control" name="message" id="message" value="{{ old('message') }}" type="text" required="required">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Submit Message</button>

                            </fieldset>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@stop