<div class="btn-group" role="group" aria-label="...">
  <a href="{{ route('books.index') }}" class="btn btn-default {{ (Route::is('books.index'))? 'active' : '' }}">All books</a>
  <a href="javascript:void(0);" @click="formOpen(true)" class="btn btn-default">Add a new Book</a>
</div>
