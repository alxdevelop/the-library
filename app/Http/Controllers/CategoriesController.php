<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{


    protected $paginate = 20;


    /**
     * List the categories
     **/
    public function index(Request $request)
    {
        if($request->has('q')){
            $categories = Category::where('name','LIKE', '%'.$request->get('q').'%')->paginate($this->paginate);
            //add the query in the pagination
            $categories->withPath('?q='.$request->get('q'));
        }else{
            $categories = Category::paginate($this->paginate);
        }
        return view('categories.index', compact('categories'));
    }





    /**
     * Function to show the create form
     **/
     public function create()
     {
         return view('categories.create');
     }




     /**
      * Save the new Category
      **/
      public function store(CategoryRequest $request)
      {
          //save the data
          Category::create($request->all());
         //return to the list
         return redirect()->route('categories.index')->with('success','You add a new category');
      }



      /**
       * Show the Edit form
       **/
      public function show(Category $category)
      {
         return view('categories.show', compact('category'));
      }




      /**
       * Show the Edit form
       **/
      public function edit(Category $category)
      {
         return view('categories.edit', compact('category'));
      }



      /**
       * save the update
       **/
       public function update(CategoryRequest $request)
       {
           $category = Category::findOrFail($request->get('id'));
           $category->name = $request->get('name');
           $category->description = $request->get('description');
           $category->save();

           return redirect()->route('categories.index')->with('success', 'You update a category');
       }



       /**
        * Delete the category
        **/
        public function destroy(Category $category)
        {
            $category->delete();
            return redirect()->back()->with('success', 'The category was deleted');
        }
}
