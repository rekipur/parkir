@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
                    <!--Form with header-->
        <div class="card">
            <div class="card-block">

                <!--Header-->
                <div class="form-header blue-gradient">
                    <h3><i class="fa fa-car"></i> Login:</h3>
                </div>

                <!--Body-->
                {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-envelope prefix" style="color: black;"></i>
                    {!! Form::text('email', null, ['class' =>'form-control','style'=>'color:black;']) !!}
                    {!! Form::label('email', 'Alamat Email') !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="fa fa-lock prefix" style="color: black;"></i>
                    {!! Form::password('password', ['class'=>'form-control','style'=>'color:black;']) !!}
                    {!! Form::label('password', 'Kata Sandi') !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="text-xs-center">
                    <button class="btn btn-indigo">Log In</button>
                    <hr>
                    <fieldset class="form-group">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1">Subscribe me to the newsletter</label>
                    </fieldset>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <!--/Form with header-->
        </div>
        <div class="col-md-8">
            <!--Card-->
                <div class="card-overlay">

                    <!--Content-->
                    <div class="white-text text-xs-center">
                        <div class="card-block">
                            <h5 class="teal-text"><i class="fa fa-pie-chart"></i> Marketing</h5>
                            <h3>Project title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos. Odit
                                sed qui, dolorum!.</p>
                            <a class="btn btn-lg btn-indigo btn-white-outline"><i class="fa fa-clone left"></i> View project</a>
                        </div>
                    </div>
                    
                </div>
            <!--/.Card-->
        </div>
    </div>
</div>
@endsection
