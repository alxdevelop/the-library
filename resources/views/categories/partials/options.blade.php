<div class="btn-group" role="group" aria-label="...">
  <a href="{{ route('categories.index') }}" class="btn btn-default {{ (Route::is('categories.index'))? 'active' : '' }}">All Categories</a>
  <a href="{{ route('categories.create') }}" class="btn btn-default {{ (Route::is('categories.create'))? 'active' : '' }}">Add a new category</a>
</div>
