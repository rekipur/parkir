{!! Form::model($model, ['url'=>$form_url, 'method' => 'delete', 'class'=>'form-inline js-confirm', 'data-confirm'=>$confirm_message]) !!}
<a href="{{ $edit_url }}" class="btn btn-sm btn-info">Edit</a> |
{!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger']) !!}
{!! Form::close() !!}