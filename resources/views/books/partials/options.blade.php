<div class="btn-group" role="group" aria-label="...">
  <a href="{{ route('books.index') }}" class="btn btn-default {{ (Route::is('books.index'))? 'active' : '' }}">All books</a>
  <a href="{{ route('books.create') }}" class="btn btn-default {{ (Route::is('books.create'))? 'active' : '' }}">Add a new Book</a>
</div>
