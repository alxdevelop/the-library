@extends('master')

@section('content')
    <div class="col-xs-12">
        <h2>Edit category</h2>

        <div class="col-md-6">

            {!! Form::model($category, ['route' => 'categories.update']) !!}
                {!! Form::hidden('id', $category->id) !!}
                @include('categories.partials.form')
            {!! Form::close() !!}

        </div>
        <div class="col-xs-12 col-md-6">
            <h4>Options</h4>
            @include('categories.partials.options')
        </div><!-- .col -->

    </div>
@endsection
