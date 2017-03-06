<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Http\Requests\BookRequest;

class BooksController extends Controller
{


    //items to paginate
    private $paginate = 20;


    /**
     * The home
     **/
    public function index(Request $request){
        return view('books.index');
    }


    public function getBooks()
    {
        $books = Book::with('category')->get();
        return response()->json($books);
    }

    /**
     * Show the create form
     */
    public function create()
    {
        return view('books.create');
    }


    /**
     * Save the book
     */
     public function store(BookRequest $request)
     {
         Book::create($request->all());
         return redirect()->route('books.index')->with('success','You add a new Book');
     }



     /**
      * Show the book
      */
      public function show(Book $book)
      {
          return view('books.show', compact('book'));
      }




     /**
      * Show the edit form
      */
      public function edit(Book $book)
      {
          return view('books.edit', compact('book'));
      }


      /**
       * Save the new data
       */
       public function update(BookRequest $request)
       {

           $book = Book::findOrFail($request->get('id'));
           $book->name = $request->get('name');
           $book->author = $request->get('author');
           $book->published = $request->get('published');
           $book->category_id = $request->get('category_id');
           $book->save();

           return redirect()->route('books.index')->with('success','The book was updated');
       }


       /**
        * Delete the category
        **/
        public function destroy(Book $book)
        {
            $book->delete();
            return redirect()->back()->with('success', 'The book was deleted');
        }



        /**
         * Status about the book
         */
        public function borrow(Request $request)
        {
            $book = Book::findOrFail($request->get('id'));
            $book->user = $request->get('user');
            $book->save();
            return redirect()->back()->with('success', 'The book was borrowed');
        }
}
