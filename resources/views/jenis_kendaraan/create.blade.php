@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				 

			<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Tambah Jenis Kendaraan
			    </div>
			    <div class="card-block">			    

			    {!! Form::open(['url'=>route('jenis_kendaraan.store'), 'method'=>'post']) !!}
			    @include('jenis_kendaraan._form')
			    {!! Form::close() !!}
			        
			    </div>
			</div>
			<!--/.Panel-->



			</div>
		</div>
	</div>
@endsection