<?php $active="login"; ?>
@extends('layouts.dashboard')
@section('content') 
<section id="login">

    <div class="container">

    {!! Form::open(['url'=>'password/email','class' => '']) !!}
    
        <table class="table" style="width: 50%; margin: 0 auto;">

            @if(count($errors)>0)
            <tr>
                <td colspan="2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </td>
            </tr>
            @endif

            <tr>
                <td colspan="2">
                    <h1 class="well text-center" style="color: red;">Send Password Reset Link</h1>
                </td>
            </tr>
            <tr>
                <td>Enter your Email</td>
                <td>{!! Form::email("email") !!}</td>
            </tr>
            <tr>
                <td colspan="2">
                    {!! Form::submit("Send Password Reset Link") !!}
                </td>
            </tr>
        </table>
        {!!Form::close()!!}
</section>

@stop