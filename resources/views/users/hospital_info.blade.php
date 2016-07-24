<?php $active="hospital"; ?>
@extends('layouts.dashboard')
@section('content') 

    <section id="blog" class="container">
        <div class="center">
            <h2>Hospital Information</h2>
            <h3 class="lead">The government approved a renowned hospital and improved quality of service address , doctor , patient viewing time, bed , pathological tests in various subjects including costs and find the information here .<br> The bed and cabin bookings online , pathological tests , the doctor can be a serial for the meeting from the app .</h3>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                    <div class="blog-item">
                        <div class="row">
                                
                            <div class="col-xs-12 col-sm-4 blog-content">

                                <a href="#"><img class="img-responsive img-blog" src="images/2.jpg" width="100%" alt="" /></a>
                            </div>
                            @foreach($division->districts as $district)
                                @foreach($district->categories as $category)
                                    @foreach($dcategory->$hospitals as $hospital)
                                    <div class="col-xs-12 col-sm-6 blog-content">
                                        <h2>{{ $hospital->name }}</h2>
                                    </div>
                                    @endforeach
                                @endforeach
                            @endforeach
                            
                        
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
@stop