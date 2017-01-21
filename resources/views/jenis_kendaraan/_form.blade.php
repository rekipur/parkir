<div class="md-form{{ $errors->has('nama') ? 'has-error' : '' }}">
	<i class="fa fa-th-large prefix"></i>
	{!! Form::text('nama', null,['class'=>'form-control']) !!}
	{!! Form::label('nama', 'Nama Jenis Kendaraan') !!}
	{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>

<div class="md-form{{ $errors->has('deskripsi') ? 'has-error' : '' }}">
<i class="fa fa-align-justify prefix"></i>
	{!! Form::textarea('deskripsi', null,['class'=>'md-textarea']) !!}
	{!! Form::label('deskripsi', 'Deskripsi') !!}
	{!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>

<div class="text-xs-center">
	<button type="submit" class="btn btn-success">Selesai</button>
</div>