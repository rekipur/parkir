@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!--Panel-->
			<div class="card">
			    <div class="card-header info-color-dark white-text">
			        Edit Kategori Barang
			    </div>
			    <div class="card-block">
			        
			        <p class="card-text">
					{!! Form::model($jk, ['url' => route('jenis_kendaraan.update', $jk->id), 'method' => 'put']) !!}
			        @include('jenis_kendaraan._form')
			        {!! Form::close() !!}
			        <br><br>
			    </div>
			</div>
			<!--/.Panel-->	
			</div>
		</div>
	</div>
@endsection