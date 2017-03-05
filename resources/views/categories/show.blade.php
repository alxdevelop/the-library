@extends('master')

@section('content')
    <div class="col-xs-12">
        <h2>Show category</h2>

        <div class="col-md-6">

            <div class="page-header">
              <h1>{{ $category->name }} <small>Category</small></h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <strong>Description:</strong><br>
                    <p>{{ $category->description }}<br></p>
                    <strong>Total Books:</strong> {{ $category->books->count() }}
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-md-6">
            <h4>Options</h4>
            @include('categories.partials.options')
        </div><!-- .col -->

    </div>
@endsection
