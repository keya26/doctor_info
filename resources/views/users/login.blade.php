<?php $active="login"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="contact-page">
        <div class="container">
            <div class="center">
			<br>			
                <h2>Log In Here</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-10 col-sm-offset-2">
                        <div class="form-group">
							<i class="fa fa-sign-in" aria-hidden="true"></i>
                            <label>Username *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>  
						<div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						  </div>						
                    
						<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button>
						</div>
					</div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#login-page-->

@stop