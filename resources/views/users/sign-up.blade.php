<?php $active="sign_up"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="contact-page">
        <div class="container">
            <div class="center">
			<br>			
                <h2>Sign Up Here</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{ URL::route('register')}}">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Username *</label>
                            <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Specialist *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
						
                    </div>
                    <div class="col-sm-5">
						<div class="form-group">
                            <label>Workplace *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Visiting Time *</label>
                            <input type="date" name="time" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Educational Qualification *</label>
                            <input type="text" name="education" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
						
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#sign-up-page-->
@stop