{{-- Table with the categories list --}}

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Books</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{ route('categories.show', [$category->id]) }}">{{ $category->name }}</a></td>
                <td>{{ $category->books->count() }}</td>
                <td>
                    <a href="{{ route('categories.edit', [$category->id]) }}" class="btn btn-xs btn-primary">Editar</a>
                    <a href="javascript:void(0);" @click="validateDelete('{{$category->id}}')" class="btn btn-xs btn-danger">Eliminar</a>
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'class' => 'hide_form', 'id' => "wrap_del_$category->id"]) !!}
                        <div class="wrap_del_content">
                            <p>Are you sure to delete this category?</p>
                            {!! Form::submit('Yes', ['class' => 'btn btn-xs btn-danger']) !!}
                            <a href="javascript:void(0);" @click="CancelDeleteCategory('{{$category->id}}')">Cancel</a>
                        </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
