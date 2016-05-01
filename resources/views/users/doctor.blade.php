<?php $active="doctor"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Particularity</h2>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/medicine.jpg" alt="">
                            <h2>Medicine</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/surgery.jpg" alt="">
                            <h2>Surgery</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/eye.jpg" alt="">
                            <h2>Eye</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/heart.jpg" alt="">
                            <h2>Heart disease</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/ent.jpg" alt="">
                            <h2>Ear, Nose & Throat</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/dentist.jpg" alt="">
                            <h2>Dentistry</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/orthopedic.jpg" alt="">
                            <h2>Orthopedic</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/doctor/nephrology.jpg" alt="">
                            <h2>Nephrology</h2>
                            <h3><a  href="{!! URL::route('doctor_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                </div>
            </div>
        </div>
    </section>
@stop