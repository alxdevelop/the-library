<div class="panel panel-default">
    <div class="panel-body">
        <h4>Search category:</h4>
        {!! Form::open(['route' => 'categories.index', 'method' => 'get']) !!}
            <div class="form-group">
                {!! Form::text('q', (Request::has('q')) ? Request::get('q') : null, ['class' => 'form-control', 'placeholder' => 'search the category..' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Search', ['class' => 'btn btn-sm btn-primary']) !!}
                @if(Request::has('q'))
                    <a href="{{route('categories.index')}}">Clear search</a>
                @endif
            </div><!-- .form-group -->
        {!! Form::close() !!}


    </div><!-- .panel-body -->
</div><!-- .panel -->
