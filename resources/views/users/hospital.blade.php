<?php $active="hospital"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Renowned Hospital</h2>
            </div>
            
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            @foreach($divisions as $division)
                                @foreach($division->districts as $district)
                                    <h2>{{ $district->name }}</h2>
                                    <h3><a  href="{!! URL::route('hospital_info') !!}"> View Details</a></h3>
                                    
                                @endforeach
                            @endforeach 
                            
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/hospital/clinic.jpg" alt="">
                            <h2>Clinic</h2>
                            <h3><a  href="{!! URL::route('hospital_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/hospital/consultation.jpg" alt="">
                            <h2>Consultation Center</h2>
                            <h3><a  href="{!! URL::route('hospital_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/hospital/dental.jpg" alt="">
                            <h2>Dental Clinic</h2>
                            <h3><a  href="{!! URL::route('hospital_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/hospital/diagnostic.jpg" alt="">
                            <h2>Diagnostic Centre</h2>
                            <h3><a  href="{!! URL::route('hospital_info') !!}"> View Details</a></h3>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="img-responsive" src="images/hospital/upazilla.jpg" alt="">
                            <h2>Upazila Health Complex</h2>
                            <h3><a  href="{!! URL::route('hospital_info') !!}"> View Details</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop