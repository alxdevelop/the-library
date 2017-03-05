@inject('list', 'App\Services\CategoriesService')

<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<span class="label label-danger">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('author','Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
    {!! $errors->first('author', '<span class="label label-danger">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('published','Published Date:') !!}
    {!! Form::text('published', null, ['class' => 'form-control','placeholder' => 'YYYY-MM-DD']) !!}
    {!! $errors->first('published', '<span class="label label-danger">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('category_id','Category:') !!}
    {!! Form::select('category_id', $list->categories(), (isset($book))? $book->category_id : 0,['class' => 'form-control']) !!}
    {!! $errors->first('category_id', '<span class="label label-danger">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
