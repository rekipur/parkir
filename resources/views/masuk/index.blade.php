@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
	        <!--Form with header-->
	        <div class="card">
	            <div class="card-block">

	                <!--Header-->
	                <div class="form-header blue-gradient">
	                    <h3>Operasi Masuk <i id="dua" class="fa fa-motorcycle"></i><i id="empat" class="fa fa-car"></i> :</h3>
	                </div>

	                <!--Body-->
					<div class="md-form{{ $errors->has('kategori_barang') ? 'has-error':'' }}">
						{!! Form::select('kategori_barang', [''=>'']+App\Jenis_kendaraan::pluck('nama','id')->all(),null,[
							'id'=>'jenis',
							'class'=>'js-selectize',
							'placeholder'=>'Pilih Jenis Kendaraan'
						]) !!}
						{!! $errors->first('kategori_barang', '<p class="help-block">:message</p>') !!}
					</div>

	                <div class="md-form{{ $errors->has('kode_parkir') ? ' has-error' : '' }}">
	                    <i class="fa fa-thumb-tack prefix"></i>
	                    {!! Form::text('kode_parkir', null, ['id'=>'kode_parkir','class'=>'form-control']) !!}
	                    {!! Form::label('kode_parkir', 'Kode Parkir') !!}
	                    {!! $errors->first('kode_parkir', '<p class="help-block">:message</p>') !!}
	                </div>

	                <div class="md-form{{ $errors->has('keterangan') ? ' has-error' : '' }}">
	                    <i class="fa fa-file-text-o prefix"></i>
	                    {!! Form::textarea('keterangan', null, ['id'=>'keterangan','class'=>'md-textarea']) !!}
	                    {!! Form::label('keterangan', 'Keterangan') !!}
	                    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
	                </div>	                
	                <input type="text" id="pivot">
	                <div class="text-xs-center">
	                    <button class="btn btn-indigo" onclick="masuk()" >Masuk</button>
	                </div>

	            </div>
	        </div>
	        <!--/Form with header-->
		</div>
		<div class="col-md-7"></div>
	</div><hr>
	<div class="row">
		<div class="col-md-12">
			<!--Panel-->
			<div class="card">
			    <div class="card-header success-color-dark white-text">
			        Kendaraan Masuk
			    </div>
			    <div class="card-block">			    
			        <div class="table-responsive">
			        	{!! $html->table(['class'=>'table table-striped']) !!}
			        </div>
			        
			    </div>
			</div>
			<!--/.Panel-->

		</div>
	</div>
</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection
