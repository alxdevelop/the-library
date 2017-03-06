@extends('master')

@section('content')
    <div id="book">
        <div class="col-xs-12">
            <h2>Books</h2>

            <div class="col-xs-12 col-md-6">
                @include('books.partials.search')
            </div><!-- .col -->

            <div class="col-xs-12 col-md-6">
                <h4>Options</h4>
                @include('books.partials.options')
            </div><!-- .col -->

            <div v-show="formNew" class="col-xs-12 col-md-7">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <h4>New Book</h4>
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" v-model="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            <input type="text" v-model="author" class="form-control" />
                        </div>
                        <div class="form-group">
                            <strong>Published Date:</strong>
                            <input type="text" v-model="published" class="form-control" />
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            <input type="text" v-model="published" class="form-control" />
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-danger" @click="formOpen(false)">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <h4>All books</h4>
                @include('partials.messages') {{-- show success messages --}}

                <span class="label label-default">Total: @{{books.length}}</span>
                <div v-if="books.length == 0" class="alert alert-warning" role="alert">There aren't any books, please add a new book</div>

                @include('books.partials.table')
                @include('partials.modal')
            </div><!-- .col -->

        </div><!-- .col -->
    </div><!-- #list_items -->
@endsection

@push('scripts')
    <script>
        window.Book();
    </script>
@endpush
