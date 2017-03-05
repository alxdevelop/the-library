@extends('master')

@section('content')
    <div id="list_items">
        <div class="col-xs-12">
            <h2>Books</h2>

            <div class="col-xs-12 col-md-6">
                @include('books.partials.search')
            </div><!-- .col -->

            <div class="col-xs-12 col-md-6">
                <h4>Options</h4>
                @include('books.partials.options')
            </div><!-- .col -->

            <div class="col-xs-12">
                <h4>All books</h4>
                @include('partials.messages') {{-- show success messages --}}

                <span class="label label-default">Total: {{$books->total()}}</span>
                @if($books->count() == 0)
                    <div class="alert alert-warning" role="alert">There aren't any books, please add a new book</div>
                @endif

                @include('books.partials.table')
                @include('partials.modal')
                {!! $books->links() !!}
            </div><!-- .col -->

        </div><!-- .col -->
    </div><!-- #list_items -->
@endsection

@push('scripts')
    <script>
        window.DeleteItem();
    </script>
@endpush
