<span v-if="!books">There aren't books</span>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="book in filteredBooks">
            <td>@{{ book.id }}</td>
            <td>@{{ book.name }}</td>
            <td>@{{ book.category.name }}</td>
            <td>
                <span v-if="book.user" class="label label-danger">Unavailable</span>
                <span v-if="!book.user" class="label label-success">Available</span>
            </td>
            <td>
                <a href="javascript:void(0);" class="btn btn-xs btn-primary">Editar</a>
                <a href="javascript:void(0);" @click="validateDelete('book.id')" class="btn btn-xs btn-danger">Delete</a>
                <a href="javascript:void(0);" @click="showModal('@{{ book.id }}')" class="btn btn-xs btn-info">To borrow</a>
            </td>
        </tr>
        {{-- @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td><a href="{{ route('books.show', [$book->id]) }}">{{ $book->name }}</a></td>
                <td>{{ $book->category->name }}</td>
                <td>{!! ($book->user) ? '<span class="label label-danger">Unavailable</span>' : '<span class="label label-success">Available</span>' !!}</td>
                <td>
                    <a href="{{ route('books.edit', [$book->id]) }}" class="btn btn-xs btn-primary">Editar</a>
                    <a href="javascript:void(0);" @click="validateDelete('{{$book->id}}')" class="btn btn-xs btn-danger">Delete</a>
                    <a href="javascript:void(0);" @click="showModal('{{ $book->id }}','{{ $book->name }}','{{ $book->user }}')" class="btn btn-xs btn-info">To borrow</a>
                    {!! Form::open(['route' => ['books.destroy', $book->id], 'class' => 'hide_form', 'id' => "wrap_del_$book->id"]) !!}
                        <div class="wrap_del_content">
                            <p>Are you sure to delete this book?</p>
                            {!! Form::submit('Yes', ['class' => 'btn btn-xs btn-danger']) !!}
                            <a href="javascript:void(0);" @click="CancelDeleteCategory('{{$book->id}}')">Cancel</a>
                        </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach --}}
    </tbody>
</table>
