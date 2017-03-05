<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<span class="label label-danger">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<span class="label label-danger">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-default']) !!}
    <a href="{{ route('categories.index') }}" class="btn">Cancel</a>
</div>
