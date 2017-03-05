@extends('master')

@section('content')
    <div class="col-xs-12">
        <h2>Show book</h2>

        <div class="col-md-6">

            <div class="page-header">
              <h1>{{ $book->name }} <small>Book</small></h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <strong>Author:</strong> {{ $book->author }}<br>
                    <strong>Pushished Date:</strong> {{ $book->published }}<br>
                    <strong>Category:</strong> {{ $book->category->name }}<br>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <strong>Status:</strong> {!! ($book->user) ? '<span class="label label-danger">Unavailable</span>' : '<span class="label label-success">Available</span>' !!}<br>
                    <strong>Borrowed to:</strong> {{ $book->user }}
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-md-6">
            <h4>Options</h4>
            @include('books.partials.options')
        </div><!-- .col -->

    </div>
@endsection
