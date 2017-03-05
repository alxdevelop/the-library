@extends('master')

@section('content')
    <div class="col-xs-12">
        <h2>New category</h2>


        <div class="col-md-6">
            {!! Form::open(['route' => 'categories.store']) !!}
                @include('categories.partials.form')
            {!! Form::close() !!}
        </div>
        <div class="col-xs-12 col-md-6">
            <h4>Options</h4>
            @include('categories.partials.options')
        </div><!-- .col -->

    </div>
@endsection
