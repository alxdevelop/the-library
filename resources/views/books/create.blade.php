@extends('master')

@section('content')
    <div class="col-xs-12">
        <h2>New book</h2>


        <div class="col-md-6">
            {!! Form::open(['route' => 'books.store']) !!}
                @include('books.partials.form')
            {!! Form::close() !!}
        </div>
        <div class="col-xs-12 col-md-6">
            <h4>Options</h4>
            @include('books.partials.options')
        </div><!-- .col -->

    </div>
@endsection
