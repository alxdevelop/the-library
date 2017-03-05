<?php
namespace App\Services;
use App\Category;

class CategoriesService
{
    public function categories()
    {
        return Category::all()->pluck('name','id');
    }
}
