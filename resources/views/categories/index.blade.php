@extends('master')

@section('content')
    <div id="list_items">
        <div class="col-xs-12">
            <h2>Categories</h2>

            <div class="col-xs-12 col-md-6">
                @include('categories.partials.search')
            </div><!-- .col -->

            <div class="col-xs-12 col-md-6">
                <h4>Options</h4>
                @include('categories.partials.options')
            </div><!-- .col -->


            <div class="col-xs-12">

                @include('partials.messages') {{-- show success messages --}}

                <h4>All categories</h4>
                <span class="label label-default">Total: {{$categories->total()}}</span>


                @if($categories->count() == 0)
                    <div class="alert alert-warning" role="alert">There aren't any categories, please add a new category</div>
                @endif

                @include('categories.partials.table')

                {!! $categories->links() !!}
            </div><!-- .col -->

        </div><!-- .col -->
    </div><!-- #list_items -->

@endsection

@push('scripts')
    <script>
        window.DeleteItem();
    </script>
@endpush
